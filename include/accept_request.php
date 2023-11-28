<?php
session_start();
require_once('connect.php');
require_once('logger_info.php');
auth();
if(!empty($_REQUEST['id'])) {
    
    $acceptId = $_REQUEST['id'];
    $receiverId = $loggerId;
    $status = 'pending';

    $checkRequest = mysqli_query($connect, "SELECT * FROM `friends` WHERE `id`='$acceptId' && `receiver_id`='$receiverId' && `status`='$status'");
    if(mysqli_num_rows($checkRequest) === 1){
        $acceptQuery = mysqli_query($connect, "UPDATE `friends` SET `status`='accepted' WHERE `id`='$acceptId' && `receiver_id`='$receiverId' && `status`='$status'");
        if($acceptQuery == true) {
            header("location: ../friend-requests.php?status=accepted");
        }
    }else {
        header('location: ../friend-requests.php');
    }
}else {
    header('location: ../friend-requests.php');
}