<!DOCTYPE html>
<?php
	include_once '../dbconnect.php';

  function CreateQueryString($dbtable, $dbinputs){
    $dboutputs = array();
    $dbtable = $dbtable.'(';
    $temp = '(';
    for($i = 0; $i < sizeof($dbinputs); $i++)
    {
      $dboutputs[$i] = trim($_POST[$dbinputs[$i]]);
      $dboutputs[$i] = strip_tags($dboutputs[$i]);
      $dboutputs[$i] = htmlspecialchars($dboutputs[$i]);

    $dbtable = $dbtable . $dbinputs[$i];
    $temp2 =  $temp2 . "'" . $dboutputs[$i] . "'";
    if ($i!=sizeof($dbinputs)-1) {
      $dbtable = $dbtable . ',';
      $temp2 = $temp2 . ',';
      }
    }
    $dbtable = $dbtable . ')';
    $temp2 = $temp2 . ') ';
    $query = "INSERT INTO ". $dbtable. " VALUES" . $temp2;
    return $query;
  }

  function Query($query, $connection){
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		if ($result) {
				$errTyp = "success";
				$errMSG = "Successfully registered \n";
				echo $errMSG;#need to comment this out after testing
				unset($cname);
				unset($birthday);
			 } else {
				$errTyp = "danger";
				$errMSG = "Something went wrong, go back and try again...";
				echo $errMSG; #need to move this after testing
			 }
	}
 #need to query to match email to ID
  for($i = 1; $i <= 5; $i++)
  {
    if(isset($_POST['star-'.$i]))
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
  		$db = mysql_connect("localhost", "root", "");
			mysql_select_db("forum_table");
			if(!mysql_connect("localhost","root", "")){
				die("SQL error occurred on connect: ". mysql_error());
			}
			if(!mysql_select_db("forum_table")){
				die("SQL error occurred selecting DB: ".mysql_error());
			}
			mysql_query("INSERT INTO forum_table VALUES ($_POST['name'], $_POST['email'], $stars,$_POST['reviewtext'], time())");

			#$dbtable = 'Posts_Table';
  		#Query(CreateQueryString($dbtable, $dbinputs), $connection); 		#creating query
  		#database table information

  	}


  ?>
