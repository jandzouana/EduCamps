<!DOCTYPE html>
<?php

for($i = 1; $i <= 5; $i++)
	  {
	    if(//isset($_POST['star'] == $i))
	    {
	      $stars = $i;
	    }
	  }


/*
  	if (isset($_POST['reviewtext'])){
  		#database information (may change from computer to computer)
  		$database = 'Educamps';
  		$dbserver = 'localhost';
  		$dbusername = 'root';
  		$dbpass = '';

  		#connection to database server
  		$connection = connectDB($database, $dbserver, $dbusername, $dbpass); #from dbconnect.php

  		#database table information
*/

if(isset($_POST['content'])){
  		$con = mysqli_connect("localhost", "fourthreefour", "americo", "educamps");
			if(!$con){
				die("SQL error occurred on connect: ". mysql_error());
			}
			//$name = $_POST['name'];
			//$email = $_POST['email'];
			//$content = $_POST['content'];
			mysqli_query($con,"INSERT INTO forum_tb (name, email, stars, content) VALUES ($name, $email, $stars, $content)");
			mysqli_close($con);
//($_POST['name'], $_POST['email'], $stars, $_POST['content']
  	}


  ?>
