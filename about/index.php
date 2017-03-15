<?php
	include_once '../dbconnect.php'; 	#contains connectDB function
	#SELECT camp_name FROM `camp`;

	function CreateQuery($dbtable, $dbcolumn){
		$query = "SELECT $dbcolumn FROM ". $dbtable;
		return $query;
	}
	function QueryCamp($query, $connection){
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		#$row = mysqli_fetch_array($result, MYSQLI_NUM); #only grabs first row

		#grabs multiple rows into an array
		while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
			$rows[] = $row;
		}
		return $rows;
	}
	#database information (may change from computer to computer)
	$database = 'educamps';
	$dbserver = 'localhost';
	$dbusername = 'fourthreefour';
	$dbpass = 'americo';
	#connection to database server
	$connection = connectDB($database, $dbserver, $dbusername, $dbpass); #from dbconnect.php

	$dbtable = "camp";
	$dbcolumn = "camp_name";
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>EduCamps Inc - About</title>
        <link href=../stylesheets/main.css media=screen rel=stylesheet type=text/css />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    </head>
    <body>
        <div class=main_container id="schedule_container">
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
           <div id="anchor_bar" >
               <p><a id="register_button" href=../registration>Register Now!</a></p>
                <h4>Locations</h4>
                <?php
                    $camp_name = QueryCamp("SELECT camp_name FROM camp", $connection);
                    foreach($camp_name as $row){
                        echo "<p><a href='#$row[0]'>$row[0]</a></p>";
                    }
                ?>
            </div>
            <div id="schedule_main_content" class = "main_content">
                <h1>About</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <h4>Robotics Activities:</h4>
                <p>Structure building, programming, sensors, robot races, and robot challenges </p>
                <h4>Sports Activities:</h4>
                <p>Basketball, kayaking, snowboarding, skiing, hiking, BB guns, dodgeball, sailing, soccer, and tennis</p>
                <h4>Arts and Hobbies Activities:</h4>
                <p>Painting, digital transformation, comedy and drama, digital transfusion, and cooking</p>
                <p><a id="register_button" href=../activities/>Activity Samples</a></p>
                <h4>Schedule</h4>
                    <table>
                        <tr><td><strong>Camp</strong></td><td><strong>Location</strong></td><td><strong>Address</strong></td><td><strong>Active</strong></td><td><strong>Winter</strong></td><td><strong>Summer</strong></td><td><strong>Capacity</strong></td></tr>
                        <?php
                        $conn = mysqli_connect("localhost", "fourthreefour", "americo", "educamps");
                        if (!$conn){
                            die("Database connection failed: " . mysqli_connect_error());
                        }
                        $campsquery = mysqli_query($conn, "SELECT camp_name, location, address, active, season_winter, season_summer, capacity FROM camp");
                        if(!$campsquery)
                        {
                            die("SQL query failed:\n$campquery\n". mysql_error());
                        }
                        while($camp = mysqli_fetch_assoc($campsquery)){
                        ?>
                        <tr><td><?= $camp['camp_name'] ?></td><td><?= $camp['location'] ?></td><td><?= $camp['address'] ?></td>
                        <?php if ($camp['active']){     ?> 
                            <td>YES</td> <?php } 
                                else{ ?> 
                            <td>NO</td> 
                        <?php } ?>
                        <?php if ($camp['season_winter']){     ?> 
                            <td>X</td> <?php } 
                                else{ ?> 
                            <td></td> 
                        <?php } ?> 
                        <?php if ($camp['season_summer']){     ?> 
                            <td>X</td> <?php } 
                                else{ ?> 
                            <td></td> 
                        <?php } ?>  
                        <td><?= $camp['capacity'] ?></td></tr>
                        <?php } ?>
                </table>


                <div id="headspace">
                <?php
                    $dbcolumn = "camp_name, location";
                    $camp_name = QueryCamp("SELECT camp_name, location FROM camp", $connection);
                    foreach($camp_name as $row){
                        echo "<h4><a name='$row[0]'> $row[0], $row[1]</a></h4>";
                        echo "<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>";
                    }
                ?>
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
                            <br/>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>
