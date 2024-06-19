<?php
session_start();
if(isset($_SESSION['id'])) {
	include "config.php";
	$uid = mysqli_real_escape_string($connect, $_SESSION['id']);
	$query = mysqli_query($connect, "SELECT * FROM users WHERE id = '".$uid."';");
	if(mysqli_num_rows($query) == 0) {
		session_destroy();
		header("Location: login");
	} else {
		$user = getUserEntireData($uid);
        $porto = getUserPorto($uid);
		include "view/dashboard.php";
	}
} else {
    session_destroy();
	header("Location: login");
	exit;
}
?>