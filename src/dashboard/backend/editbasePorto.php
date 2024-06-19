<?php
if($isRouter) {
    if(empty($_POST['name'])) {
        $result['msg'] = "Error Please insert all the form!";
    } else {
        $name = mysqli_real_escape_string($connect, $_POST['name']);

        $porto = editPorto($user['id'], $name);

        if($porto['status'] === 'success') {
            $result['msg'] = 'Portofolio Updated Succesfully.';
            $result['success'] = 'true';
            $result['next_view'] = 'infoPorto';
        } else {
            $result['msg'] = $porto['msg'];
        }
    }
}



?>
