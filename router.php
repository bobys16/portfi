<?php
session_start();
$http = "false";

if($_SERVER['HTTP_EXECUTE'] == "DONE") {
    $http = "true";
}
include "config.php";
header('Execute: SUCCESS');

if($db_status == false)
{
    $result = array('success' => 'false', 'msg' => 'Routes Cannot Be Querried', 'action' => null, 'next_action' => null, 'next_view' => null, 'image_url' => null, 'title' => null);
    header('Process: ERROR');
    echo json_encode($result);
}
else
{
    if($http == "true") {
        $server_request = $_SERVER['REQUEST_METHOD'];
        $data;
        $result = array('success' => 'false', 'msg' => null, 'action' => null, 'next_action' => null, 'next_view' => null);
        
        $get_routes = mysqli_query($connect, "SELECT * FROM routes");
        $route = array();
        while($row = mysqli_fetch_assoc($get_routes)) {
            $route[$row['path']] = $row;
        }
        
        if($server_request == "POST") {
            $data = $_POST;
        } else {
            $data = $_GET;
        }
        
        if($data['method'] == "view") {
            $target = 'view/';
        } else {
            $target = 'backend/';
        }
    
        $path = $data['path'];
        if(array_key_exists($path, $route)) {
            if($route[$path]['is_auth'] == 1 && isAuthenticated($_SESSION)) {
                $user = getUserEntireData($_SESSION['id']);
                $porto = getUserPorto($_SESSION['id']);
                $uid  = $_SESSION['id'];
                if($data['method'] == "view" && $route[$path]['type'] !== 'control') {
                    $isRouter = true;
                    $result['success'] = "true";
                    include $target.$path.".php";
                } else if($data['method'] == "control" && $route[$path]['type'] !== 'view') {
                    $isRouter = true;
                    include $target.$path.".php";
                }
            } else if($route[$path]['is_guest'] == 1) {
                $isRouter = true;
                include $target.$path.".php";
            } else {
                $result['msg'] = "Requirement doesnt meet";
                $result['next_action'] = "login";
                header('location: login');
            }
        } else {
            $result['msg'] = "Path not found ";
            $result['next_action'] = "dashboard";
            header('Location: /login');
        }
        if($data['method'] == "control") {
            echo json_encode($result);
        } else if($result['success'] == 'false' && $data['method'] == "view") {
            header('Process: ERROR');
            echo json_encode($result);
        }
    } else {
        echo "nothing to do";
    }
}

////// functions

function isAuthenticated($session) {
    global $connect;
    $return = false;
    if(isset($session['login'])) {
        $uid = $session['id'];
        $query = mysqli_query($connect, "SELECT * FROM users WHERE id='".$uid."'");
        if(mysqli_num_rows($query) > 0) {
            $return = true;
        }
    }
    return $return;
}