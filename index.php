<!DOCTYPE html>
<html>
    <head>
        <title>EduCamps Inc</title>
        <link href="stylesheets/main.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        <div class="main_container">
	        <div id="menubar">
                <a href ="">
                    <img id="logo" src="icons/logo.svg" alt="EduCamps logo" /><label id="topname">EduCamps</label>
                </a>
	            <table>
	                <tr>
										<td><a href=about>About</a></td>
										<td><a href=registration>Registration</a></td>
										<td><a href=store>Store</a></td>
										<td><a href=gallery>Gallery</a></td>
										<td><a href=forum>Forum</a></td>
										<td><a href=data>Data</a></td>
										<td><a href=activities>Activities</a></td>
										<td><a href=schedule>Schedule</a></td>
	                </tr>
	            </table>
	        </div>
	        <div id="banner">
	            <h1 id="title"> EduCamps </h1>
	            <img id="headerpic" src="circuit.jpg" alt="header image" />
	        </div>
	        <div class="main_content" id = "home_main_content">

	            <div id="mission">
                    <p id="tagline"> Ignite their curiosity. </p>
	                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
	            </div>
	                <table>
	                    <tr>
	                        <td> Requirements
                                <ul>
                                    <li> </li>
                                    <li> </li>
                                    <li> </li>
                                </ul>
                            </td>
	                        <td> Activity Options
                                <ul>
                                    <li> </li>
                                    <li> </li>
                                    <li> </li>
                                </ul>
                            </td>
	                        <td> Instructions
                                <ul>
                                    <li> </li>
                                    <li> </li>
                                    <li> </li>
                                </ul>
                            </td>
                        </tr>
	                </table>
                <table id="locationswrapper">
                    <tr>
                        <td id="map">
                            <img src="map.png" alt="locations map"/>
                        </td>
                        <td>
                            <ul id="list_container">Locations
                            <?php
                                $conn = mysqli_connect("localhost", "fourthreefour", "americo", "educamps");
                                if (!$conn){
                                    die("Database connection failed: " . mysqli_connect_error());
                                }
                                $campsquery = mysqli_query($conn, "SELECT camp_name, location FROM camp");
                                if(!$campsquery)
                                {
                                    die("SQL query failed:\n$campquery\n". mysql_error());
                                }
                                while($camp = mysqli_fetch_assoc($campsquery)){
                            ?>
                                <li><?= $camp['camp_name'] ?>
                                <?php } ?>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
	        </div>
            <div id="footer">
                <div id="left-footer">
                    <img id="logo" src="icons/logo.svg" alt="EduCamps logo" />
                    <a href="contact">Contact Us</a>
                </div>
                <table id="right-footer">
                    <tr>
                        <td>
                            <a href="https://www.facebook.com"><img src="icons/facebook.svg" alt="facebook icon"/></a>
                            <a href="https://www.twitter.com"><img src="icons/twitter.svg" alt="twitter icon"/></a>
                            <a href="https://www.instagram.com"><img src="icons/instagram.svg" alt="instagram icon"/></a>
                            <a href="https://www.snapchat.com"><img src="icons/snapchat.svg" alt="snapchat icon"/></a>
                            <br/>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>
