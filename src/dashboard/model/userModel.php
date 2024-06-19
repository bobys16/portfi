<?php
function getUserEntireData($id) {
    global $connect;
    $stmt = $connect->prepare("SELECT * FROM users WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $res = $result->fetch_assoc();
    return $res;
}

function getUserbyEmail($email){
    global $connect;
    $stmt = $connect->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result) {
        if($result->num_rows > 0){
            $res['status'] = '200';
            $res['data'] = $result->fetch_assoc();
        } else {
            $res['status'] = '404';
            $res['data'] = null;
        }
    } else {
        $res['status'] = '500';
        $res['error'] = mysqli_error($connect);
        $res['data'] = null;
    }
    return $res;
}

function registerUser($name, $email, $password, $confirmPassword) {
    global $connect;
    
    if(strlen($password) < 6){
        return array("status" => "error", "msg" => "Passwords need to be 6 or more character");
    }

    if ($password !== $confirmPassword) {
        return array("status" => "error", "msg" => "Passwords do not match");
    }
    
    $userCheck = getUserbyEmail($email);
    if ($userCheck['status'] === '200') {
        return array("status" => "error", "msg" => "User already exists");
    }
    
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $token = md5(rand(10000,100000000));
    $is_created = 0;
    
    $stmt = $connect->prepare("INSERT INTO users (name, email, password, token, is_created) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $name, $email, $hashedPassword, $token, $is_created);
    if ($stmt->execute()) {
        $userId = $stmt->insert_id;
        $user = array(
            "id" => $userId,
            "name" => $name,
            "email" => $email,
            "token" => $token,
            "is_created" => $is_created,
            "last_login" => null,
            "created_at" => date("Y-m-d H:i:s", $is_created)
        );
        return array("status" => "success", "success" => true, "msg" => "User registered successfully, Please login.", "user" => $user);
    } else {
        return array("status" => "error", "success" => false, "msg" => "Failed to register user");
    }
}
