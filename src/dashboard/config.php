<?php
date_default_timezone_set('Asia/Jakarta');
$base_url = "";
$his = date("d-m-Y H:i:s");
$result = array('success' => "false", 'msg' => 'Nothing to do');
$connect = mysqli_connect('localhost','user','password','database');
$db_status = true;
if (!$connect) {
    $db_status = false;
}

// Configuration variables for creating sub-domain
$cpanelUsername = 'cpanelUsername';
$cpanelPassword = 'cpanelPassword';
$cloudflareApiKey = 'cloudflareApiKey';
$cloudflareEmail = 'cloudflareEmail';
$cloudflareZoneID = 'cloudflareZoneID';
$domain = 'portfi.online'; //
$ipAddress = 'ipAddress'; //

require 'model/userModel.php';
require 'model/portoModel.php';
?>