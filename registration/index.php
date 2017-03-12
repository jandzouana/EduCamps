<?php
	include_once '../dbconnect.php'; 	#contains connectDB function

	function QueryCamp($query, $connection){
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

		#grabs multiple rows into an array
		while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
			$rows[] = $row;
		}
		return $rows;
	}
	#database information (may change from computer to computer)
	$dbserver = 'localhost';
	$dbusername = 'fourthreefour';
	$dbpass = 'americo';
	$database = 'educamps';
	#connection to database server
	$connection = connectDB($database, $dbserver, $dbusername, $dbpass); #from dbconnect.php
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>EduCamps Inc - Registration</title>
        <link href="../stylesheets/main.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
    </head>
    <body>
        <div class=main_container>
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
            <div id="reg_main_content" class = "main_content">
                <div id="regform">
                    <div id = "regtitle">
                        <h2>Registration Form </h2>
                        <p> Please fill out the following information regarding your camper: </p>
                    </div>
                    <form action="registration.php" method="post">
                        <label>Child's Full Name
                            <input type="text" name="cname" required /></label>
                        <label>Birthday
                            <input type="date" name="birthday" required/></label>
                        <label>Parent's Full Name:
                            <input type="text" name="pname" size="20" required /></label>
                        <label>Parent's Email:
                            <input type="email" name="pemail" size="25" required /></label>
                        <label>Password:
                            <input type="password" name="password" size="25" required /></label>
                        <label>Parent's Phone:
                            <input type="text" name="phone" size="10" maxlength="10" required /></label>
                        <label>Grade Level:
                            <input type="number" name="grade" size="2" maxlength="2" required /></label>
                        <label>School:
                            <input type="text" name="school" size="20" maxlength="20" required /></label>
                        <label>Camp
                            <select name="location" required>
                                <?php
                                $camps_query = mysqli_query($connection, "SELECT camp_name FROM camp where active='1'");
                                while($camp = mysqli_fetch_assoc($camps_query)){
                                    echo "<option value=".$camp['camp_name'].">".$camp['camp_name']."</option>";
                                }
                                mysqli_close($connection);
                                ?>
                            </select></label>
                        <label>Camp Section:</label>
                            <select name="section" required>
                                <option value="June">June 1</option>
                                <option value="December">December 1</option>
                            </select>
                        <label>Camp Duration:</label>
                            <select name="duration" required>
                                <option value="1">1 week</option>
                                <option value="2">2 weeks</option>
                            </select>
                        <label>Special Instructions:
                            <input type="textarea" name="special" rows="2" cols="20" /></label>
                        <input type=submit name=Submit class="button">
                    </form>
                </div>
            </div>
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
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>
