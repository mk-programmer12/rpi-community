<?php
session_start();
require_once("include/connect.php");
require_once("include/logger_info.php");
auth();
$logoutTime = time();
$onlineStatus = "Offline";
$isOnline = 0;

$update_query = mysqli_query($connect, "UPDATE `student_info` SET `log_out_time`='$logoutTime', `is_online`='$isOnline', `online_status`='$onlineStatus' WHERE `id`='$loggerId'");
if($update_query) {
    session_destroy();
    header('location: login.php');
}else {
    header('location: profile.php');
}

?>