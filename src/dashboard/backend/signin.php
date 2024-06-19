<?php
if($isRouter) {
    if(empty($_POST['email']) || empty($_POST['password'])) {
        $result['msg'] = "Error";
    } else {
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);

        $user = getUserbyEmail($email);

        if($user['status'] === '200') {
            if(password_verify($password, $user['data']['password'])) {
                $_SESSION['id'] = $user['data']['id'];
                $_SESSION['login'] = 'true';
                $result['success'] = 'true';
                $result['msg'] = "Login successful";
                $result['action'] = "move";
                $result['next_view'] = "/dashboard";
            } else {
                $result['msg'] = "Incorrect password";
            }
        } else {
            $result['msg'] = "User not found or error occurred";
        }
    }
}
?>
