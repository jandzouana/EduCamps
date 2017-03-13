
<?php
$camp_names = array(); #Jessica added this
$connection = mysqli_connect("localhost", "fourthreefour", "americo", "educamps");
if (!$connection){
die("Database connection failed: " . mysqli_connect_error());
}

$camp_names_query = mysqli_query($connection, "SELECT camp_id, camp_name FROM camp");
while($row = mysqli_fetch_assoc($camp_names_query)){
$camp_names[$row['camp_id']] = $row['camp_name'];
}
$count = 0;
foreach($camp_names as $name)
{
  $count++;
}
$num_camps = $count;
/*$connection = mysqli_connect("localhost", "fourthreefour", "americo", "educamps");
if(!$connection)
{
  echo "connection failed";
}

$namequery = mysqli_query($connection, "SELECT camp_name FROM camp");
if(!$namequery)
{
  echo "query failed";
}
while($camp_name = mysqli_fetch_array($namequery))
{
  $camp_names[] = $camp_name;
  echo "$camp_name";
}*/
$num_camps = count($camp_names);
 ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>EduCamps Inc - Data</title>
        <link href=../stylesheets/main.css media=screen rel=stylesheet type=text/css />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <script type='text/javascript' src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src = "data.js"></script>
    </head>
    <body>
        <div class=main_container id = "data_main_container">
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
            <
            <div id="data_main_content" class = "main_content">
              <h1> Data </h1>
              <div class = "box">
                  <div id = "graphContainer">
                  </div>
                  <p id = "graphCaption">
                    Nulla tincidunt nisl at laoreet consequat. Aenean luctus felis nisl, dictum aliquam arcu volutpat sed. </p>
              </div>
              <br/>
              <div class = "box">
                  <div id = "barContainer">
                  </div>
                  <p id = "barCaption">
                    Nulla tincidunt nisl at laoreet consequat. Aenean luctus felis nisl, dictum aliquam arcu volutpat sed. </p>
              </div>
                <br/>

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
