<?php
session_start();
require_once('connect.php');
require_once('logger_info.php');
auth();

if(!empty($_REQUEST['id'])) {

    $requestId = $_REQUEST['id'];
    $senderId = $loggerId;
    $status = 'pending';
    // check request
    $checkRequest = mysqli_query($connect, "SELECT * FROM `friends` WHERE `id`='$requestId' && `sender_id`='$senderId' && `status`='$status'");
    if(mysqli_num_rows($checkRequest) === 1) {
        // cancel request query
        $cancelQuery = mysqli_query($connect, "DELETE FROM `friends` WHERE `id`='$requestId' && `sender_id`='$senderId' && `status`='$status'");
        if($cancelQuery == true) {
            header('location: ../send-requests.php?status=canceled');
        }else {
            echo "<script>alert('Something is wrong! Please try again.);window.open('../send-requests.php','_self');</script>";
        }
    
    }

}else {
    header('location: ../send-requests.php');
}