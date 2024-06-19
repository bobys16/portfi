<?php
if ($isRouter) {
    $payload = array();
    $fields = ['facebook', 'instagram', 'linkedin', 'github', 'twitter'];

    foreach ($fields as $field) {
        if (!empty($_POST[$field])) {
            $payload[$field] = mysqli_real_escape_string($connect, $_POST[$field]);
        } else {
            $result['msg'] = "Error: Please insert all the form fields!";
        }
    }
    
    $porto = editPortoSocial($porto['porto']['id'], $payload);

    if ($porto['status'] === 'success') {
        $result['msg'] = 'Portfolio Updated Successfully.';
        $result['success'] = 'true';
        $result['next_view'] = 'socialPorto';
    } else {
        $result['msg'] = $porto['msg']; 
    }
}
?>
