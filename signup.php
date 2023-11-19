<?php
session_start();
if(isset($_SESSION['userPassword'])){
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
    <style>
        .form_box {
            height: 600px;
        }
    </style>
</head>

<body>

    <div class="form_box rounded">
        <div class="form">
            <form action="include/signup.php" method="post">
                <h2 class="mt-5">Sign up</h2>
                <div class="input-box">
                    <input type="text" name="name" required>
                    <span>Full Name</span>
                    <i></i>
                </div>
                <div class="input-box mt-5">
                    <input type="number" name="roll" required>
                    <span>Roll</span>
                    <i></i>
                </div>
                <div class="input-box mt-5">
                    <input type="password" name="password" minlength="6" required>
                    <span>Password</span>
                    <i></i>
                </div>
                <div class="submit-button my-5">
                    <input type="submit" value="Signup" name="signup">
                </div>
                <div class="links">
                    <span>Already have an account?</span>
                    <a href="login.php">Login</a>
                </div>
            </form>
        </div>
    </div>


</body>

</html>