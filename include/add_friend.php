<?php
session_start();
require_once('connect.php');
require_once('logger_info.php');
// check empty request id
if(!empty($_REQUEST['id'])) {
    // sender id
    $friendId = $_REQUEST['id'];
    // check valid user
    $checkValidUser = mysqli_query($connect, "SELECT * FROM `student_info` WHERE `id`='$friendId'");
    if(mysqli_num_rows($checkValidUser) === 1) {

        $senderId = $friendId; // friend request sender id
        $receiverId = $loggerId; // friend request receiver id
        $sendTime = time(); // send time
        // check already friend query
        $checkAlreadyFriend = mysqli_query($connect, "SELECT * FROM `friends` WHERE (`sender_id`='$senderId' && `receiver_id`='$receiverId') || (`sender_id`='$receiverId' && `receiver_id`='$senderId')");
        // check already friend condition
        if(mysqli_num_rows($checkAlreadyFriend) === 0) {
            // send friend request query
            $addFriendQuery = mysqli_query($connect, "INSERT INTO `friends`(`sender_id`, `receiver_id`, `send_time`) VALUES('$senderId', '$receiverId', '$sendTime') ");
            if($addFriendQuery) {
                // output if sent request
                echo "<script>alert('Friend request sent.');window.open('../find-friends.php','_self');</script>";
            }else {
                echo "<script>alert('Something is wrong! Please try again.');window.open('../find-friends.php','_self');</script>";
            }
        }else {
            echo "<script>alert('Already request sent.');window.open('../find-friends.php','_self');</script>";
        }        
    }else {
        echo "<script>alert('This user is not available.');window.open('../find-friends.php','_self');</script>";
    }
}else {
    header('location: ../find-friends.php');
}
?>