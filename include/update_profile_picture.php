<?php
session_start();
require_once('connect.php');
require_once('logger_info.php');
auth();

// check request method
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // check file name
    if ($_FILES['profilePicture'] && $_FILES['profilePicture']['name']) {
        // allowed image extension
        $allowed = array('jpeg', 'png', 'jpg');
        // filename
        $filename = $_FILES['profilePicture']['name'];
        // check image file
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        if (in_array($extension, $allowed)) {
            $fileSize = $_FILES['profilePicture']['size'];
            // check file size
            if($fileSize > 1048576) {
                echo "<script>alert('File size is to large. Allowed if file size is less than 1 mb.');window.open('../profile.php','_self');</script>";
            }else {
                $uniqueId = uniqid();
                $file_tmp_name = $_FILES['profilePicture']['tmp_name'];
                $fileNameDB = $uniqueId . '.' . $extension;
                // transfor file
                move_uploaded_file($file_tmp_name, "../uploads/profile_picture/$fileNameDB");
                // update database
                $updateQuery = mysqli_query($connect, "UPDATE `student_info` SET `avatar`='$fileNameDB' WHERE `id`='$loggerId'");
                if ($updateQuery) {
                    header("location: ../profile.php");
                } else {
                    echo "<script>alert('Something is wrong! Please try again.');window.open('../profile.php','_self');</script>";
                }
            }
        } else {
            echo "<script>alert('Only jpg, png or jpeg image format allowed!');window.open('../profile.php','_self');</script>";
        }
    }else {
        echo "<script>alert('Please select an image!');window.open('../profile.php','_self');</script>";
    }

}else {
    header('location: ../profile.php');
}



?>