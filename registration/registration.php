<!DOCTYPE html>
<?php
	include_once '../dbconnect.php'; 	#contains connectDB function
	#query function

	function CostCalc($dbtable, $pemail, $connection){
		$cost = $_POST['duration']*50;
		#$query = "SELECT * FROM " . $dbtable . " WHERE pemail='" .$pemail."'";
		#SELECT COUNT(*) FROM foo WHERE bar = 'value';
		/*
		if ($count == 1){
			$_SESSION['pemail'] = $pemail;
			$cost = $cost - $cost*.15;
		}
		else{
			//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
			$fmsg = "Email not found";
			#echo $fmsg;
		}
		if (isset($_SESSION['pemail'])){
			$pemail = $_SESSION['pemail'];
			#echo "Hi " . $pemail . "";
		}
		*/

		$query = "SELECT COUNT(cname) AS SUM FROM " . $dbtable . " WHERE pemail='" .$pemail."'";
		$result = mysqli_query($connection, $query);
		$rows = mysqli_fetch_assoc($result);
		$count = $rows['SUM'];
		echo $count; #shows number of emails in database that have registered email
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
	function CreateQueryString($dbtable, $dbinputs){
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

	if (isset($_POST['cname'])){
		#database information (may change from computer to computer)
		$database = 'educamps';
		$dbserver = 'localhost';
		$dbusername = 'root';
		$dbpass = '';

		#connection to database server
		$connection = connectDB($database, $dbserver, $dbusername, $dbpass); #from dbconnect.php

		#database table information
		$dbtable = 'campers';
		$dbinputs = array("cname", "birthday", "pname", "password", "pemail", "phone", "grade", "school", "special");
		Query(CreateQueryString($dbtable, $dbinputs), $connection); 		#creating query
		#database table information
		$dbtable = 'registration';
		$dbinputs = array("pemail", "cname", "location", "duration");
		Query(CreateQueryString($dbtable, $dbinputs), $connection); 		#creating query
		$dbtable = 'campers'; #added this

		#calculating Cost
		$cost = CostCalc($dbtable, $_POST['pemail'], $connection);
	}
 ?>

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
            <div class = "main_content">
								<div id=regform>
                    <form action="registration_confirm.php" method="post">
											<div id = "regtitle">
												<h2> Payment Information </h2>
												<p>Your Camp Order: $<?= $cost ?></p>
											</div>
                        <label>Cardholder's Name:</label>
												<input type="text" name="cardname" size="20" required />
												<label>Card Number:</label>
												<input type="number" name="cnumber" minlength="5" maxlength="5" required />
												<label>Card Type:</label>
												<select name="cardtype" required>
	                       <option value="1">Visa</option>
	                       <option value="2">Mastercard</option>
												 <option value="3">Amex</option>
												 <option value="4">Discover</option>
                        </select>
												<label>Expiration Date(MMYY):</label>
												<input type="text" name="expiration" minlength="4" maxlength="4" required />
												<label>CVV:</label>
												<input type="text" name="cvv" minlength="3" maxlength="3" required />
												<label>Billing Address:</label>
												<input type="text" name="billing" size="20" required />
												<label>State</label>
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
												</select>
												<label>City:</label>
												<input type="text" name="city" size="20" required />
												<label>Postal Code:</label>
												<input type="number" name="postal" minlength"4" maxlength="5" required />
												<label>Phone number:</label>
												<input type="number" name="phone" minlength"10" maxlength="10" required />
                        <input type="submit" name="Submit">
                    </form>
                </div>
            </div>
            <div id="footer">
            <div id="left-footer">
                <img id="logo" src="../icons/logo.svg" alt="EduCamps logo" />
                <a href="webmaster.html">Webmaster</a>
                <a href="contact.html">Contact Us</a>
            </div>
                <table id="right-footer">
                    <tr>
                        <td>
                            <a href="https://www.facebook.com"><img src=../icons/facebook.svg alt="facebook icon"/></a>
                            <a href="https://www.twitter.com"><img src=../icons/twitter.svg alt="twitter icon"/></a>
                            <a href="https://www.instagram.com"><img src=../icons/instagram.svg alt="instagram icon"/></a>
                            <a href="https://www.snapchat.com"><img src=../icons/snapchat.svg alt="snapchat icon"/></a>

                        </td>
                    </tr>
                </table>
            </div>
        </div>

    </body>
</html>
