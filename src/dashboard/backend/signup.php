<?php
if($isRouter) {
    if(empty($_POST['email']) || empty($_POST['pw1']) || empty($_POST['pw2']) || empty($_POST['name'])) {
        $result['msg'] = "Error, Mohon mengisi semua bagian yang ada!";
    } else {
        $name = mysqli_real_escape_string($connect, $_POST['name']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $password = mysqli_real_escape_string($connect, $_POST['pw1']);
        $c_password = mysqli_real_escape_string($connect, $_POST['pw2']);

        $register = registerUser($name, $email, $password, $c_password);

        if($register['status'] === 'success') {
           $result['success'] = 'true';
           $result['msg'] = $register['msg'];
        } else {
            $result['msg'] = $register['msg'];
        }
    }
}
?>
