<?php
function getUserPorto($id) {
    global $connect;
    
    // Prepare the main query to fetch porto details
    $stmt = $connect->prepare("SELECT * FROM porto WHERE user_id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $portoResult = $stmt->get_result();
    $porto = $portoResult->fetch_assoc();
    
    if (!$porto) {
        return null; // Return null if no porto found for the user
    }
    
    // Prepare query to fetch porto_detail
    $detailStmt = $connect->prepare("SELECT * FROM porto_detail WHERE porto_id=?");
    $detailStmt->bind_param("i", $porto['id']);
    $detailStmt->execute();
    $detailResult = $detailStmt->get_result();
    $porto_detail = $detailResult->fetch_assoc();
    
    // Prepare query to fetch porto_social
    $socialStmt = $connect->prepare("SELECT * FROM porto_social WHERE porto_id=?");
    $socialStmt->bind_param("i", $porto['id']);
    $socialStmt->execute();
    $socialResult = $socialStmt->get_result();
    $porto_social = $socialResult->fetch_assoc();
    
    // Build the result array
    $result = array(
        'porto' => $porto,
        'porto_detail' => $porto_detail,
        'porto_social' => $porto_social
    );
    
    return $result;
}

function insertPorto($userId, $domainName, $template, $name) {
    global $connect;

    // Validate domain name
    if (!preg_match('/^[a-zA-Z0-9-]+(\.[a-zA-Z]{2,})+$/', $domainName)) {
        return array("status" => "error", "msg" => "Invalid domain name format");
    }

    $checkStmt = $connect->prepare("SELECT id FROM porto WHERE domain_name = ?");
    $checkStmt->bind_param("s", $domainName);
    $checkStmt->execute();
    $checkResult = $checkStmt->get_result();
    $checkUser = $connect->prepare("SELECT is_created FROM users WHERE id = ?");
    $checkUser->bind_param("i", $userId);
    $checkUser->execute();
    $UserResult = $checkUser->get_result()->fetch_array(MYSQLI_ASSOC);

    if ($checkResult->num_rows > 0) {
        return array("status" => "error", "msg" => "Domain name already used");
    }
    
    if ($UserResult['is_created'] > 0){
        return array("status" => "error", "msg" => "You've created a portfolio already, please refresh this page to continue");
    }

    $stmt = $connect->prepare("INSERT INTO porto (user_id, domain_name, template_id, name, created_at, modified_at) VALUES (?, ?, ?, ?, NOW(), NOW())");
    $stmt->bind_param("isss", $userId, $domainName, $template, $name);
    $stmt->execute();

    $portoId = $stmt->insert_id;

    if ($portoId) {
        
        insertPortoDetail($portoId);

        insertPortoSocial($portoId);
        
        updateUserData($userId);

        return array("status" => "success", "porto_id" => $portoId, "next_action" => 'dashboard');
    } else {
        return array("status" => "error", "msg" => "Failed to add your portfolio, please contact us!");
    }
}

function insertPortoDetail($portoId) {
    global $connect;

    $stmt = $connect->prepare("INSERT INTO porto_detail (porto_id, modified_at) VALUES (?, NOW())");
    $stmt->bind_param("i", $portoId);
    $stmt->execute();
}

function insertPortoSocial($portoId) {
    global $connect;

    $stmt = $connect->prepare("INSERT INTO porto_social (porto_id, created_at) VALUES (?, NOW())");
    $stmt->bind_param("i", $portoId);
    $stmt->execute();
}

function updateUserData($userId) {
    global $connect;
    
    $stmt = $connect->prepare("UPDATE users SET is_created=1 WHERE id=?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
}

function editPorto($userId, $name) {
    global $connect;

    $checkStmt = $connect->prepare("SELECT id FROM porto WHERE user_id = ?");
    $checkStmt->bind_param("i", $userId);
    $checkStmt->execute();
    $checkResult = $checkStmt->get_result();

    if ($checkResult->num_rows < 1) {
        return array("status" => "error", "msg" => "Porto Not found, maybe you need to create one? $userId");
    }

    $stmt = $connect->prepare("UPDATE porto SET name=?, modified_at=NOW() WHERE user_id=?");
    $stmt->bind_param("si", $name, $userId);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        return array("status" => "success", "userId" => $userId, "msg" => "Portfolio updated successfully");
    } else {
        return array("status" => "error", "msg" => "Failed to update portfolio, please contact us!");
    }
}

function editPortoDetailst($portoId, $payload) {
    global $connect;

    $expertise = isset($payload['expertise']) ? $payload['expertise'] : '';
    $image = isset($payload['image']) ? $payload['image'] : '';
    $smallDetail = isset($payload['small_detail']) ? $payload['small_detail'] : '';
    $largeDetail = isset($payload['large_detail']) ? $payload['large_detail'] : '';
    $xpYear = isset($payload['xp_year']) ? $payload['xp_year'] : '';
    $certification = isset($payload['certification']) ? $payload['certification'] : '';

    $stmt = $connect->prepare("UPDATE porto_detail SET expertise = ?, image = ?, small_detail = ?, large_detail = ?, xp_year = ?, certification = ? WHERE porto_id = ?");
    $stmt->bind_param("ssssssi", $expertise, $image, $smallDetail, $largeDetail, $xpYear, $certification, $portoId);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        return array("status" => "success", "msg" => "Portfolio updated successfully");
    } else {
        return array("status" => "error", "msg" => "Failed to update portfolio, please contact us!");
    }
}

function editPortoSocial($portoId, $payload) {
    global $connect;

    $facebook = isset($payload['facebook']) ? $payload['facebook'] : '';
    $instagram = isset($payload['instagram']) ? $payload['instagram'] : '';
    $linkedin = isset($payload['linkedin']) ? $payload['linkedin'] : '';
    $github = isset($payload['github']) ? $payload['github'] : '';
    $twitter = isset($payload['twitter']) ? $payload['twitter'] : '';

    $stmt = $connect->prepare("UPDATE porto_social SET facebook = ?, instagram = ?, linkedin = ?, github = ?, twitter = ? WHERE porto_id = ?");
    $stmt->bind_param("sssssi", $facebook, $instagram, $linkedin, $github, $twitter, $portoId);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        return array("status" => "success", "msg" => "Portfolio updated successfully");
    } else {
        return array("status" => "error", "msg" => "Failed to update portfolio, please contact us! $portoId $facebook");
    }
}


function createSubdomain($username, $password, $rootDomain, $subdomain) {
    $apiEndpoint = "https://srv54.niagahoster.com:2083/cpsess5547097742/execute/SubDomain/addsubdomain";

    $data = [
        'domain' => $subdomain,
        'rootdomain' => $rootDomain,
        'dir' => 'portiUser/'.$subdomain
    ];

    $ch = curl_init($apiEndpoint);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        "Authorization: cpanel $username:49T0KXO16UY85SFK6BDGZOTLQLOH9ZQ0",
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

function updateCloudflareDNS($apiKey, $email, $zoneID, $subdomain, $domain, $ipAddress) {
    $apiEndpoint = "https://api.cloudflare.com/client/v4/zones/$zoneID/dns_records";

    $data = [
        'type' => 'A',
        'name' => $subdomain . '.' . $domain,
        'content' => $ipAddress,
        'ttl' => 120,
        'proxied' => true,
    ];

    $ch = curl_init($apiEndpoint);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'X-Auth-Email: ' . $email,
        'Authorization: Bearer ' . $apiKey,
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

function recursiveCopy($source, $destination) {
    if (!is_dir($source)) {
        return false;
    }
    
    if (!is_dir($destination)) {
        if (!mkdir($destination, 0777, true)) {
            return false;
        }
    }
    
    $files = scandir($source);
    
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            $sourceFile = $source . '/' . $file;
            $destinationFile = $destination . '/' . $file;
            
            if (is_dir($sourceFile)) {
                recursiveCopy($sourceFile, $destinationFile);
            } else {
                copy($sourceFile, $destinationFile);
            }
        }
    }
    
    return true;
}


?>
