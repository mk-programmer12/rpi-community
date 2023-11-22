<?php
session_start();
require_once('connect.php');
require_once('logger_info.php');
$loggerPassword = $_SESSION['userPassword'];
$designation = '';
$about = '';
$email = '';
$registration = '';
$department = '';
$semester = '';
$group = '';
$shift = '';
$session = '';
$phone = '';
$gender = '';
$presentAddress = '';
$permanentAddress = '';
$fbLink = '';
$twitterLink = '';
$instagramLink = '';
$linkedinLink = '';

    if(isset($_POST['update_profile'])) {
        if(empty($_POST['u_name'])) {
            echo "<script>alert('Name must be required.');window.open('../profile.php','_self');</script>";
        }else {
            $name = ltrim(htmlspecialchars(mysqli_real_escape_string($connect, $_POST['u_name'])));

            // update designation
            if(!empty($_POST['u_designation'])) {
                $designation = ltrim(htmlspecialchars(mysqli_real_escape_string($connect, $_POST['u_designation'])));
            }
            // update email
            if(!empty($_POST['u_email'])) {
                $email = ltrim(htmlspecialchars(mysqli_real_escape_string($connect, $_POST['u_email'])));
            }
            // update registration
            if(!empty($_POST['u_registration'])) {
                $registration = ltrim(htmlspecialchars(mysqli_real_escape_string($connect, $_POST['u_registration'])));
            }
            // update department
            if(!empty($_POST['u_department'])) {
                $department = ltrim(htmlspecialchars(mysqli_real_escape_string($connect, $_POST['u_department'])));
            }
            // update semester
            if(!empty($_POST['u_semester'])) {
                $semester = ltrim(htmlspecialchars(mysqli_real_escape_string($connect, $_POST['u_semester'])));
            }
            // update group
            if(!empty($_POST['u_group'])) {
                $group = ltrim(htmlspecialchars(mysqli_real_escape_string($connect, $_POST['u_group'])));
            }
            // update shift
            if(!empty($_POST['u_shift'])) {
                $shift = ltrim(htmlspecialchars(mysqli_real_escape_string($connect, $_POST['u_shift'])));
            }
            // update session
            if(!empty($_POST['u_session'])) {
                $session = ltrim(htmlspecialchars(mysqli_real_escape_string($connect, $_POST['u_session'])));
            }
            // update phone
            if(!empty($_POST['u_phone'])) {
                $phone = ltrim(htmlspecialchars(mysqli_real_escape_string($connect, $_POST['u_phone'])));
            }
            // update gender
            if(!empty($_POST['u_gender'])) {
                $gender = ltrim(htmlspecialchars(mysqli_real_escape_string($connect, $_POST['u_gender'])));
            }
            // update permanent address
            if(!empty($_POST['u_permanent_address'])) {
                $permanentAddress = ltrim(htmlspecialchars(mysqli_real_escape_string($connect, $_POST['u_permanent_address'])));
            }
            // update presentAddress
            if(!empty($_POST['u_present_address'])) {
                $presentAddress = ltrim(htmlspecialchars(mysqli_real_escape_string($connect, $_POST['u_present_address'])));
            }
            // update facebook link
            if(!empty($_POST['u_facebook'])) {
                $fbLink = ltrim(htmlspecialchars(mysqli_real_escape_string($connect, $_POST['u_facebook'])));
            }
            // update twitter link
            if(!empty($_POST['u_twitter'])) {
                $twitterLink = ltrim(htmlspecialchars(mysqli_real_escape_string($connect,$_POST['u_twitter'])));
            }
            // update instagram link
            if(!empty($_POST['u_instagram'])) {
                $instagramLink = ltrim(htmlspecialchars(mysqli_real_escape_string($connect,$_POST['u_instagram'])));
            }
            // update linkedin link
            if(!empty($_POST['u_linkedin'])) {
                $linkedinLink = ltrim(htmlspecialchars(mysqli_real_escape_string($connect,$_POST['u_linkedin'])));
            }
            // update about
            if(!empty($_POST['u_about'])) {
                $about = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['u_about']));
            }

            // echo 'name: '. $name . '<br>';
            // echo 'designation: '. $designation . '<br>';
            // echo 'about: '. $about . '<br>';
            // echo 'session: '. $session . '<br>';
            // echo 'shift: '. $shift . '<br>';
            // echo 'group: '. $group . '<br>';
            // echo 'semester: '. $semester . '<br>';
            // echo 'department: '. $department . '<br>';
            // echo 'email: '. $email . '<br>';
            // echo 'phone: '. $phone . '<br>';
            // echo 'presentAddress: '. $presentAddress . '<br>';
            // echo 'permanentAddress: '. $permanentAddress . '<br>';
            // echo 'fbLink: '. $fbLink . '<br>';
            // echo 'twitterLink: '. $twitterLink . '<br>';
            // echo 'instagramLink: '. $instagramLink . '<br>';
            // echo 'linkedinLink: '. $linkedinLink . '<br>';

            $query = "UPDATE `student_info` SET `name`='$name',`s_registration`='$registration',`email`='$email',`phone`='$phone',`s_department`='$department',`s_semester`='$semester',`s_group`='$group',`s_session`='$session',`s_shift`='$shift',`about`='$about',`designation`='$designation',`gender`='$gender',`present_address`='$presentAddress',`permanent_address`='$presentAddress',`fb_link`='$fbLink',`twitter_link`='$twitterLink',`instagram_link`='$instagramLink',`linkedin_link`='$linkedinLink' WHERE `password`='$loggerPassword' ";
            $run_query = mysqli_query($connect, $query);
            if($run_query == true) {
                echo "<script>alert('Data updated Successful!');window.open('../profile.php','_self');</script>";
            }else {
                echo "<script>alert('Something is wrong! Please try again.');window.open('../profile.php','_self');</script>";
            }
        

        }
    }else {
        header('location: ../index.php');
    }
?>