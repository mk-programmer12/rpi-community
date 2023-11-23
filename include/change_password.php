<?php
session_start();
require_once('connect.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // check input field
        if (empty($_POST['oldPassword']) && empty($_POST['newPassword']) && empty($_POST['renewPassword'])) {
            echo "<script>alert('Password Field Empty!');window.open(' ../profile.php','_self'); </script>";
        }else {
            // get password from session
            $loggerPwd = $_SESSION['userPassword'];
            // encrypt old password
            $oldPassword = md5(sha1($_POST['oldPassword']));
            // get new password
            $newPassword  = $_POST['newPassword'];
            $renewPassword = $_POST['renewPassword'];
            // check logger password and old password
            if($loggerPwd === $oldPassword) {
                // check new password
                if($newPassword === $renewPassword) {
                    // encrypt password
                    $updatedPassword = md5(sha1($newPassword));
                    // update password
                    $updatePwdQuery = mysqli_query($connect, "UPDATE `student_info` SET `password`='$updatedPassword' WHERE `password`='$loggerPwd'");
                    // update session
                    if($updatePwdQuery == true) {
                        $_SESSION['userPassword'] = $updatedPassword;
                        echo "<script>alert('Password changed!');window.open(' ../profile.php','_self'); </script>";
                    }else {
                        // redirect if any problem in query
                        echo "<script>alert('Something is wrong! Please try again.');window.open(' ../profile.php','_self'); </script>";    
                    }
                }else {
                    // redirect if new password not matched
                    echo "<script>alert('New password not matched!');window.open(' ../profile.php','_self'); </script>";
                }
            }else {
                // redirect if old password not match
                echo "<script>alert('Invalid old password!');window.open(' ../profile.php','_self'); </script>";
            }
        }
    }else {
        // redirect if request method in not post
        header('location: ../profile.php');
    }

?>
