<?php
    $loggerPassword = '';
    if(isset($_SESSION['userPassword'])) {   
        $loggerPassword = $_SESSION['userPassword'];
    }

    $loggerId = '';
    $loggerName = '';
    $loggerRoll = '';
    $loggerRegistration = '';
    $loggerDepartment = '';
    $loggerSemester = '';
    $loggerGroup = '';
    $loggerSession = '';
    $loggerShift = '';
    $loggerAvatar = '';
    $loggerEmail = '';
    $loggerPhone = '';
    $loggerAbout = '';
    $loggerDesignation = '';
    $loggerGender = '';
    $loggerPresentAddress = '';
    $loggerPermanentAddress = '';
    $loggerFbLink = '';
    $loggerTwitterLink = '';
    $loggerInstagramLink = '';
    $loggerLinkedinLink = '';
    $loggerIsOnline = '';
    $loggerLogOutTime = '';
    $loggerAccountStatus = '';

    $query = mysqli_query($connect, "select * from `student_info` where `password`='$loggerPassword'");
    if(mysqli_num_rows($query) === 1) {
        $row = mysqli_fetch_array($query);
        $loggerId = $row['id'];        
        $loggerName = $row['name'];
        $loggerRoll = $row['roll'];
        $loggerRegistration = $row['s_registration'];
        $loggerDepartment = $row['s_department'];
        $loggerSemester = $row['s_semester'];
        $loggerGroup = $row['s_group'];
        $loggerSession = $row['s_session'];
        $loggerShift = $row['s_shift'];
        $loggerAvatar = $row['avatar'];
        $loggerEmail = $row['email'];
        $loggerPhone = $row['phone'];
        $loggerAbout = $row['about'];
        $loggerDesignation = $row['designation'];
        $loggerGender = $row['gender'];
        $loggerPresentAddress = $row['present_address'];
        $loggerPermanentAddress = $row['permanent_address'];
        $loggerFbLink = $row['fb_link'];
        $loggerTwitterLink = $row['twitter_link'];
        $loggerInstagramLink = $row['instagram_link'];
        $loggerLinkedinLink = $row['linkedin_link'];
        $loggerIsOnline = $row['is_online'];
        $loggerLogOutTime = $row['log_out_time'];
        $loggerAccountStatus = $row['account_status'];
    }

?>