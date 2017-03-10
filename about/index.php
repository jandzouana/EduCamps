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
           <div id="anchor_bar" >
                <h4>Locations</h4>
                <?php
                    $camp_name = QueryCamp("SELECT camp_name FROM camp", $connection);
                    foreach($camp_name as $row){
                        echo "<p><a href='$row[0]'>$row[0]</a></p>";
                    }
                ?>
            </div>
            <div id="schedule_main_content" class = "main_content">
                <h1>About</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                <h4>Schedule</h4>
                    <table>
                        <tr><td>Summer</td><td>June 1 - 7 <br/>June 1 - 14</td></tr>
                        <tr><td>Winter</td><td>December 1 - 7 <br/>December 1 - 14</td></tr>
                        <tr><td>Age Range</td><td>9 - 14<br/></tr>
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
