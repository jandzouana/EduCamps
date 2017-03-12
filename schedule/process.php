<?php
include_once '../dbconnect.php'; 	#contains connectDB function
if (empty($_POST['pemail'])) {
	#if try to access page without access, then redirect back to login page
	header('Location: http://localhost:7080/jess/EduCamps/schedule/');
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

#Returns $in data for camper. For example output["location"] gives location
function QuerySchedule($query, $connection, $in){
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	while($row = mysqli_fetch_array($result)){
		$output = $row[$in];
	}
	return $output;
}
#hashes password for added security
function CreateHash($password){
	$salt = date('U'); //creates different password each time
	$pass = crypt($password, $salt);
	return $pass;
}

#Used to check user credentials
function QueryLogin($query, $connection){
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
		#redirect back to login if credentials don't match
		header('Location: http://localhost:7080/jess/EduCamps/schedule/');
	}
}



#database information (may change from computer to computer)
$database = 'educamps';
$dbserver = 'localhost';
$dbusername = 'fourthreefour';
$dbpass = 'americo';

#connection to database server
$connection = connectDB($database, $dbserver, $dbusername, $dbpass); #from dbconnect.php

#checking login info
$dbtable = 'account';
$dbinputs = array("pemail", "password", "cname");
QueryLogin(CreateQueryString($dbtable, $dbinputs), $connection);

#getting user info
$dbtable = 'registration';
$dbinputs = array("cname");
#$output = QuerySchedule(CreateQueryString($dbtable, $dbinputs), $connection, "location");
?>
<!DOCTYPE HTML>
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
                    <img id="logo" src="../icons/logo.svg" alt="EduCamps logo" /><label id="topname">Educamps</label>
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
								 ?>
							<h1> <?= $_POST['cname']?>'s Schedule</h1>
							<h2>
								<?=QuerySchedule(CreateQueryString($dbtable, $dbinputs), $connection, "location")?>
								<span id="campdate"> <?=QuerySchedule(CreateQueryString($dbtable, $dbinputs), $connection, "section")?> 1 - <?=QuerySchedule(CreateQueryString($dbtable, $dbinputs), $connection, "duration")*7 ?></span> </h2>
							<?php
								$duration = QuerySchedule(CreateQueryString($dbtable, $dbinputs), $connection, "duration");
								$temp = '';
								for($i = 1; $i <= $duration; $i++){
									$temp = "Week " . $i;
									echo "<h3> $temp </h3>";
									echo "<p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>";
								}
							 ?>
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
