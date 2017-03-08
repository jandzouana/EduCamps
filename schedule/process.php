<!DOCTYPE HTML>
<?php
include_once '../dbconnect.php'; 	#contains connectDB function
function Process(){
	function CreateHash($password){
		$salt = date('U'); //creates different password each time
		$pass = crypt($password, $salt);
		return $pass;
	}
	function CreateQueryString($dbtable, $dbinputs){
		#		$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";

		$dboutputs = array();
		$temp2 = '';
		for ($i = 0; $i < sizeof($dbinputs); $i++){
			$dboutputs[$i] = trim($_POST[$dbinputs[$i]]);
			$dboutputs[$i] = strip_tags($dboutputs[$i]);
			$dboutputs[$i] = htmlspecialchars($dboutputs[$i]);
			if($dbinputs[$i]=="password"){
						$dboutputs[$i] = CreateHash($_POST[$dbinputs[$i]]);
			}
			$temp2 =  $temp2 . $dbinputs[$i] . "=" ."'" . $dboutputs[$i] . "'";
			if ($i!=sizeof($dbinputs)-1) {
				$temp2 = $temp2 . ' and ';
			}
		}
		$query = "SELECT * FROM ". $dbtable. " WHERE " . $temp2;
		return $query;
	}
	function Query($query, $connection){
		#message for invalid login
		$fmsg = "Invalid Login Credentials. If you are not registered, please register first before attempting to view the schedule.";
		$smsg = "Login successfull."; 		#message for valid login
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		$count = mysqli_num_rows($result);
		//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
		if ($count == 1){
			#$_SESSION['cname'] = $username;
			echo $smsg;
		}
		else{
			//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
			echo $fmsg;
		}
	}
	#database information (may change from computer to computer)
	$database = 'educamps';
	$dbserver = 'localhost';
	$dbusername = 'root';
	$dbpass = '';

	#connection to database server
	$connection = connectDB($database, $dbserver, $dbusername, $dbpass); #from dbconnect.php

	#database table information
	$dbtable = 'campers';
	$dbinputs = array("pemail", "password", "cname");
	Query(CreateQueryString($dbtable, $dbinputs), $connection);
}
 ?>
<html>
    <head>
        <title>EduCamps Inc - Schedule</title>
        <link href=../stylesheets/main.css media=screen rel=stylesheet type=text/css />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
				<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    </head>
    <body>
        <div class=main_container id="schedule_login_container">
            <div id=menubar>
                <a href="../">
									<img id="logo" src="../icons/logo.svg" alt="EduCamps logo" />
                </a>
                <table>
                    <tr>
											<td><a href=../about>About</a></td>
											<td><a href=../registration>Registration</a></td>
											<td><a href=../store>Store</a></td>
											<td><a href=../gallery>Gallery</a></td>
											<td><a href=../forum>Forum</a></td>
											<td><a href=../data>Data</a></td>
											<td><a href=../activities>Activities</a></td>
											<td><a href=../schedule>Schedule</a></td>
                    </tr>
                </table>
            </div>
           	<main id="login-schedule">
								<?php
									Process();
								 ?>
							<h1> <?= $_POST['cname']?>'s Schedule</h1>
							<h2> Camp </h2>
							<h3> Week 1 </h3>
							<div id="schedule-image"></div>
						</main>
            <div id=footer>
                <div id="left-footer">
                    <img id="logo" src="../icons/logo.svg" alt="EduCamps logo" />
                    <a href=webmaster.html>Webmaster</a>
                    <a href=contact.html>Contact Us</a>
                </div>
                <table id="right-footer">
                    <tr>
                        <td>
                            <a href="https://www.facebook.com"><img src=../icons/facebook.svg alt="facebook icon"/></a>
                            <a href="https://www.twitter.com"><img src=../icons/twitter.svg alt="twitter icon"/></a>
                            <a href="https://www.instagram.com"><img src=../icons/instagram.svg alt="instagram icon"/></a>
                            <a href="https://www.snapchat.com"><img src=../icons/snapchat.svg alt="snapchat icon"/></a>
                            <br/>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>
