<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbName = 'rpi_comunity';
$connect = mysqli_connect($host,$username,$password,$dbName);
if(!$connect) {
	echo 'Database Not Connected!';
}
?>