<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbName = 'rpi_comunity';
$connect = mysqli_connect($host,$username,$password,$dbName);
$siteUrl = "http://localhost/rpi-community";
if(!$connect) {
	echo 'Database Not Connected!';
}

// set time zone
date_default_timezone_set('Asia/Dhaka');

function userInfo($connection, $id) {
	$infoQuery = mysqli_query($connection, "SELECT * FROM `student_info` WHERE `id`='$id'");
	$infoRow = mysqli_fetch_array($infoQuery);
	return $infoRow;
}

function auth() {
	global $connect;
	global $siteUrl;

	if(isset($_SESSION['userPassword'])) {
		$userPass = $_SESSION['userPassword'];
		$checkAuth = mysqli_query($connect, "SELECT * FROM `student_info` WHERE `password`='$userPass'");
		if(mysqli_num_rows($checkAuth) !== 1) {
			header("location: $siteUrl/login.php");
		}
	}else {
		header("location: $siteUrl/login.php");
	}
}

function checkFriendFunction($id1, $id2) {
	global $connect;
	$checkFriendQuery = mysqli_query($connect, "SELECT * FROM `friends` WHERE (`sender_id`='$id1' && `receiver_id`='$id2') ||(`sender_id`='$id2' && `receiver_id`='$id1') && `status`='accepted'");
	if(mysqli_num_rows($checkFriendQuery) === 1) {
		return 1;
	}else {
		return 0;
	}
}



?>