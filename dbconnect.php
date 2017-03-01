<?php

$database = 'educamps';
$dbserver = 'localhost';
$dbusername = 'root';
$dbpass = '';

$connection = mysqli_connect($dbserver, $dbusername, $dbpass);
if (!$connection){
		die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, $database);
if (!$select_db){
		die("Database Selection Failed" . mysqli_error($connection));
}
?>
