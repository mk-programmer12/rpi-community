<?php
session_start();
require_once('./include/connect.php');
if(isset($_POST['login'])) {
    if($_POST['roll'] && $_POST['password']) {
        $roll = $_POST['roll'];
        $pwd = $_POST['password'];
        $password = md5(sha1($pwd));
        
        $checkValidUser = mysqli_query($connect, "select * from `student_info` where `roll`='$roll' && `password`='$password'");
        if(mysqli_num_rows($checkValidUser) === 1) {
            $_SESSION['userPassword'] = $password;
            $isOnline = 1;
            $onlineStatus = "Online";
            $updateQuery = mysqli_query($connect, "UPDATE `student_info` SET `is_online`='$isOnline', `online_status`='$onlineStatus' WHERE `password`='$password'");
            header('location: profile.php');
        }else {
            echo "<script>alert('Invalid roll or password! Please try again.');window.open('login.php','_self');</script>";
        }

    }else {
        echo "<script>alert('Invalid roll or password!');window.open('login.php','_self');</script>";
    }
}else {
    if(isset($_SESSION['userPassword'])) {
        header('location: profile.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - RPI-Community</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="assets/css/plugin.css" media="all">
    <link rel="stylesheet" type="text/css" href="assets/css/venobox.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all">
    <!-- jquery link -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
</head>

<body>

    <div class="form_box rounded">
        <div class="form">
            <form action="login.php" method="post">
                <h2 class="mt-5">Log in</h2>
                <div class="input-box">
                    <input type="number" name="roll" required>
                    <span>Roll</span>
                    <i></i>
                </div>
                <div class="input-box mt-5">
                    <input type="password" name="password" required>
                    <span>Password</span>
                    <i></i>
                </div>
                <div class="submit-button my-5">
                    <input type="submit" value="Login" name="login">
                </div>
                <div class="links">
                    <a href="#">Forgot Password?</a>
                    <a href="./signup.php">Signup</a>
                </div>
            </form>
        </div>
    </div>


</body>

</html>
<?php
}
?>