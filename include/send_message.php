<?php
session_start();
require_once('connect.php');
require_once('logger_info.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!empty($_POST['friendId']) && !empty($_POST['message'])) {
        $senderId = $loggerId;
        $receiverId = $_POST['friendId'];
        $message = $_POST['message'];
        $lastUpdateDate = date('M d, Y');
        $lastUpdateTime = date('g:i a');

        // check friendship
        
        if(checkFriendFunction($senderId, $receiverId) === 1){
            $checkConversion = mysqli_query($connect, "SELECT * FROM `conversion` WHERE (`sender_id`='$senderId' && `receiver_id`='$receiverId') || (`sender_id`='$receiverId' && `receiver_id`='$senderId')");

            if(mysqli_num_rows($checkConversion) === 0) {
                $createConversion = mysqli_query($connect, "INSERT INTO `conversion`(`sender_id`,`receiver_id`,`last_update_date`,`last_update_time`) VALUES('$senderId','$receiverId','$lastUpdateDate','$lastUpdateTime')");

                $insertMessage = mysqli_query($connect, "INSERT INTO `messages`(`sender_id`,`receiver_id`,`message`,`send_date`,`send_time`) VALUES('$senderId','$receiverId','$message','$lastUpdateDate','$lastUpdateTime')");
                
                if($createConversion && $insertMessage) {
                    header("location: ../messages.php?id=$receiverId");
                }else {
                    echo "<script>alert('Something is wrong! Please try again.');window.open('../messages.php','_self');</script>";
                }
            }else {
                
                $updateConversion = mysqli_query($connect, "UPDATE `conversion` SET `last_update_date`='$lastUpdateDate', `last_update_time`='$lastUpdateTime' WHERE (`sender_id`='$senderId' && `receiver_id`='$receiverId') || (`sender_id`='$receiverId' && `receiver_id`='$senderId')");

                $insertMessage = mysqli_query($connect, "INSERT INTO `messages`(`sender_id`,`receiver_id`,`message`,`send_date`,`send_time`) VALUES('$senderId','$receiverId','$message','$lastUpdateDate','$lastUpdateTime')");

                if ($updateConversion && $insertMessage) {
                    header("location: ../messages.php?id=$receiverId");
                } else {
                    echo "<script>alert('Something is wrong! Please try again.');window.open('../messages.php','_self');</script>";
                }

            }
        }else {
            echo "<script>alert('This user is not able to accept your message.');window.open('../messages.php','_self');</script>";
        }

    }else {
        header("location: ../messages.php");
    }
}else {
    header("location: ../messages.php");
}
?>