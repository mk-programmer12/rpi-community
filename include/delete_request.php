<?php
session_start();
require_once('connect.php');
require_once('logger_info.php');
auth();

if(!empty($_REQUEST['id'])) {
    $deleteId = $_REQUEST['id'];
    $receiverId = $loggerId;
    $status = 'pending';

    $checkRequest = mysqli_query($connect, "SELECT * FROM `friends` WHERE `id`='$deleteId' && `receiver_id`='$receiverId' && `status`='$status'");
    if(mysqli_num_rows($checkRequest) === 1) {
        $deleteQuery = mysqli_query($connect, "DELETE FROM `friends` WHERE `id`='$deleteId' && `receiver_id`='$receiverId' && `status`='$status'");
        if($deleteQuery == true) {
            header('location: ../friend-requests.php?status=deleted');
        }else {
            header('location: ../friend-requests.php');
        }
        
    }else {
        header('location: ../friend-requests.php');
    }
}else {
    header('location: ../friend-requests.php');
}
?>