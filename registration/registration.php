<?php
	include_once '../dbconnect.php'; 	#contains connectDB function
	#query function
	if (empty($_POST['pemail'])) {
		#if try to access page without access, then redirect back to login page
		header('Location: http://localhost:7080/jess/EduCamps/registration/');
	}
	function CostCalc($dbtable, $pemail, $connection){
		$cost = $_POST['duration']*50;
		#need to make this more general
		$query = "SELECT COUNT(cname) AS SUM FROM " . $dbtable . " WHERE pemail='" .$pemail."'";
		$result = mysqli_query($connection, $query);
		$rows = mysqli_fetch_assoc($result);
		$count = $rows['SUM'];
		#echo $count; #shows number of emails in database that have registered email
		#print_r($rows);
		if ($count > 1){
			$cost = $cost - $cost*.10;
		}
		return $cost;
	}

	function CreateHash($password){
		$salt = date('U'); //creates different password each time
		$pass = crypt($password, $salt);
		return $pass;
	}
	function CreateSelectQueryString($dbtable, $dbinputs){
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
	function CreateInsertQueryString($dbtable, $dbinputs){
		$dboutputs = array();
		$dbtable = $dbtable.'(';
		$temp2 = '(';
		for ($i = 0; $i < sizeof($dbinputs); $i++){
			$dboutputs[$i] = trim($_POST[$dbinputs[$i]]);
			$dboutputs[$i] = strip_tags($dboutputs[$i]);
			$dboutputs[$i] = htmlspecialchars($dboutputs[$i]);
			if($dbinputs[$i]=="password"){
				  	$dboutputs[$i] = CreateHash($_POST[$dbinputs[$i]]);
			}
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
	#helper function to count how many kids are registered at a camp
	function CreateQueryColumnCount($dbtable, $camp_column_name, $camp_name){
		$query = "SELECT COUNT($camp_column_name) AS SUM  FROM ". $dbtable . " WHERE $camp_column_name='$camp_name'";
		return $query;
	}
	#counts how many kids are registered at a particular camp using above funciton to input camp name
	function QueryLocation($query, $connection){
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		$rows = mysqli_fetch_assoc($result);
		$count = $rows['SUM'];
		return $count;
	}
	#returns a camp's capacity
	function CampCapacity($dbtable, $capacity_column_name, $connection, $camp_column_name, $camp_name){
			$query = "SELECT $capacity_column_name FROM ". $dbtable . " WHERE $camp_column_name='$camp_name'";
			$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
			$row = mysqli_fetch_array($result, MYSQLI_NUM); #only grabs first row
			return $row[0];
	}
	#when form is submitted
	if (isset($_POST['cname'])){
		#database information (may change from computer to computer)
		$database = 'educamps';
		$dbserver = 'localhost';
		$dbusername = 'fourthreefour';
		$dbpass = 'americo';
		#connection to database server
		$connection = connectDB($database, $dbserver, $dbusername, $dbpass); #from dbconnect.php

		//Checking camp capacity before registering
		#caluclating camp's capacity
		$dbtable = 'camp';
		#	function CampCapacity($dbtable, $capacity_column_name, $connection, $camp_column_name, $camp_name){
		$cap = CampCapacity($dbtable, "capacity", $connection, "camp_name", $_POST["location"]);


		#calculating how many are registered at camp
		$dbtable = 'registration';
		$registered = QueryLocation(CreateQueryColumnCount($dbtable, "location", $_POST["location"]), $connection);
		if($registered >= $cap){
			echo "Camp is full";
			header('Location: http://localhost:7080/jess/EduCamps/registration/error.php'); #redirect to another page
		}
		//Checking if the data given already exists
		$dbtable = 'account';
		$dbinputs = array("cname", "pemail");
		$query = CreateSelectQueryString($dbtable, $dbinputs);
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		$row = mysqli_fetch_array($result, MYSQLI_NUM); #only grabs first row
		if($row==NULL){
			#database table information
			$dbtable = 'campers';
			$dbinputs = array("cname", "birthday", "pname",  "grade", "school", "special", "phone");
			Query(CreateInsertQueryString($dbtable, $dbinputs), $connection); 		#creating query
			#database table information
			$dbtable = 'registration';
			$dbinputs = array("pemail", "cname", "location", "duration", "section");
			Query(CreateInsertQueryString($dbtable, $dbinputs), $connection); 		#creating query

			#creating login info
			$dbtable = 'account';
			$dbinputs = array("pemail", "cname", "password");
			Query(CreateInsertQueryString($dbtable, $dbinputs), $connection); 		#creating query
		}
		else{
			header('Location: http://localhost:7080/jess/EduCamps/registration/error2.php'); #redirect to another page if already registered
		}
		#calculating Cost
		$dbtable = 'registration'; #added this
		$cost = CostCalc($dbtable, $_POST['pemail'], $connection);
	}
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Your Camp Order</title>
        <script src=pay.js type="text/javascript"></script>
        <link href=../stylesheets/main.css media=screen rel=stylesheet type=text/css />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
    </head>
    <body>
        <div class=main_container>
            <div id=menubar>
                <a href="../">
                <img id="logo" src="../icons/logo.svg" alt="EduCamps logo" /><label id="topname">EduCamps</label>
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
            <div class = "main_content">
                <div id=regform>
                    <form action="registration_confirm.php" method="post">
                        <div id = "regtitle">
                            <h2> Payment Information </h2>
                            <p>Your Camp Order: $<?= $cost ?></p>
                        </div>
                        <label>Cardholder's Name:
                            <input type="text" name="cardname" size="20" required /></label>
                        <label>Card Number:
                            <input type="number" name="cnumber" minlength="5" maxlength="5" required /></label>
                        <label>Card Type:
                            <select name="cardtype" required>
                                <option value="1">Visa</option>
                                <option value="2">Mastercard</option>
                                <option value="3">Amex</option>
                                <option value="4">Discover</option>
                            </select></label>
                        <label>Expiration Date(MMYY):
                            <input type="text" name="expiration" minlength="4" maxlength="4" required /></label>
                        <label>CVV:
                            <input type="text" name="cvv" minlength="3" maxlength="3" required /></label>
                        <label>Billing Address:
                            <input type="text" name="billing" size="20" required /></label>
                        <label>State
                            <select>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District Of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select></label>
                        <label>City:
                            <input type="text" name="city" size="20" required /></label>
                        <label>Postal Code:
                            <input type="number" name="postal" minlength="4" maxlength="5" required /></label>
                        <label>Phone number:
                            <input type="number" name="phone" minlength="10" maxlength="10" required /></label>
                        <input type="submit" name="Submit" class="button2">
                    </form>
                </div>
            </div>
						<div id=footer>
                <div id="left-footer">
                    <img id="logo" src="../icons/logo.svg" alt="EduCamps logo" />
                    <a href="../contact">Contact Us</a>
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
