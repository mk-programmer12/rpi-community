<?php
require_once("connect.php");

if (isset($_POST['signup'])) {
    if ($_POST['name'] && $_POST['roll'] && $_POST['password']) {
        $name = ltrim(htmlspecialchars(stripslashes(htmlentities(mysqli_real_escape_string($connect, $_REQUEST['name'])))));
        $roll = ltrim(htmlspecialchars(stripslashes(htmlentities(mysqli_real_escape_string($connect, $_REQUEST['roll'])))));
        $pwd = ltrim($_REQUEST['password']);
        $password = md5(sha1($pwd));
        $checkUser = mysqli_query($connect, "select * from `student_info` where `roll`='$roll'");
        if(mysqli_num_rows($checkUser) === 0 ) {
            $query = "INSERT INTO `student_info`(`name`, `roll`, `password`) VALUES('$name','$roll','$password')";
            $run_query = mysqli_query($connect, $query);
            if($run_query) {
                echo "<script>alert('Account created successful! Please Login.');window.open('../login.php','_self');</script>";
            }else {
                echo "<script>alert('Something is wrong! Please try again.');window.open('../signup.php','_self');</script>";
            }
        }else {
            echo "<script>alert('User already exists! Please login.');window.open('../login.php','_self');</script>";
        }        
    }else {
        echo "<script>alert('Please fill all input field.');window.open('../signup.php','_self');</script>";
    }
} else {
    echo "<h2 class='text-center mt-5'>404 Not Found!</h2>";
}
