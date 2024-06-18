<?php
if($isRouter) {
    if(empty($_POST['domain']) || empty($_POST['name']) || empty($_POST['template'])) {
        $result['msg'] = "Error Please insert all the form!";
        $currentDirectory = getcwd();
                $result['a'] = "Current directory: " . $currentDirectory;
    } else {
        $subdomain = mysqli_real_escape_string($connect, $_POST['domain']);
        $name = mysqli_real_escape_string($connect, $_POST['name']);
        $cdomain = $subdomain.'.portfi.online';
        $template = mysqli_real_escape_string($connect, $_POST['template']);

        $porto = insertPorto($user['id'], $cdomain, $template, $name);

        if($porto['status'] === 'success') {
            $response1 = createSubdomain($cpanelUsername, $cpanelPassword, $domain, $subdomain);
            $responseData1 = json_decode($response1, true);
            
            $response2 = updateCloudflareDNS($cloudflareApiKey, $cloudflareEmail, $cloudflareZoneID, $subdomain, $domain, $ipAddress);
            $responseData2 = json_decode($response2, true);
            if ($responseData1['status'] === 1 && isset($responseData2['success']) && $responseData2['success']) {
                
                $getTemplate = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM template WHERE id='".$template."'"));
                
                $sourceDir = '/home/madj5441/public_html/portfi/'.$getTemplate['dir'];
                $destinationDir = '/home/madj5441/public_html/portiUser/'.$subdomain;
            
                if (recursiveCopy($sourceDir, $destinationDir)) {
                    $result['msg'] = 'Portofolio Created Succesfully.';
                    $result['success'] = 'true';
                    $result['next_action'] = '/dashboard';
                } else {
                    $result['msg'] = 'Failed to copy files to destination directory';
                    $result['success'] = 'false';
                }
                
            } else {
                $result['msg'] = 'There is an error in our side, the system already send feedback to us!';
            }
        } else {
            $result['msg'] = $porto['msg'];
        }
    }
}



?>
