<?php
function connectDB($dbserver, $dbusername, $dbpass, $database) {
	$connection = mysqli_connect($dbserver, $dbusername, $dbpass, $database);
	if (!$connection){
        die("Database connection failed: " . mysqli_connect_error());
    }
	$select_db = mysqli_select_db($connection, $database);
	if (!$select_db){
        die("Database Selection Failed" . mysqli_error($connection));
	}
	return $connection;
}
?>
