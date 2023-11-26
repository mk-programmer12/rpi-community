<?php
session_start();
require_once('connect.php');
require_once('logger_info.php');
auth();

$deleteProfilePicture = mysqli_query($connect, "UPDATE `student_info` SET `avatar`='default.png' WHERE `id`='$loggerId'");

if($deleteProfilePicture == true) {
    header("location: ../profile.php");
}else {
    header("location: ../profile.php");
}


?>