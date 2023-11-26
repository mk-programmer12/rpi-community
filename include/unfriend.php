<?php
session_start();
require_once('connect.php');
require_once('logger_info.php');
// check request method
if($_SERVER['REQUEST_METHOD'] === "POST") {
    if(!empty($_POST['rid']) && !empty($_POST['uid'])) {
        // get required information
        $requestId = $_POST['rid'];
        $senderId = $loggerId;
        $receiverId = $_POST['uid'];
        $status = "accepted";
        // check already friends
        $checkFriends = mysqli_query($connect, "SELECT * FROM `friends` WHERE `id`='$requestId' && (`sender_id`='$senderId' && `receiver_id`='$receiverId') || (`sender_id`='$receiverId' && `receiver_id`='$senderId')");
        if(mysqli_num_rows($checkFriends) === 1) {
            // run delete query
            $deleteFriend = mysqli_query($connect, "DELETE FROM `friends` WHERE `id`='$requestId' && (`sender_id`='$senderId' && `receiver_id`='$receiverId') || (`sender_id`='$receiverId' && `receiver_id`='$senderId')");

            if($deleteFriend == true) {
                header("location: ../friends.php?status=unfriend");
            }else {
                header("location: ../friends.php?status=error");
            }
        }else {
            header("location: ../friends.php?status=error");
        }
    }else {
        header("location: ../friends.php?status=error");
    }
}else {
    header("location: ../friends.php");
}

?>
