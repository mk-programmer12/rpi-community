<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbName = 'rpi_comunity';
$connect = mysqli_connect($host,$username,$password,$dbName);
if(!$connect) {
	echo 'Database Not Connected!';
}
function userInfo($connection, $id) {
	$infoQuery = mysqli_query($connection, "SELECT * FROM `student_info` WHERE `id`='$id'");
	$infoRow = mysqli_fetch_array($infoQuery);
	return $infoRow;
}



?>