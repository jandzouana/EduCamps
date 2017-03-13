
<?php
$camp_names = array(); #Jessica added this
$connection = mysqli_connect("localhost", "fourthreefour", "americo", "educamps");
if (!$connection){
die("Database connection failed: " . mysqli_connect_error());
}
$camps = array();
$camp_names_query = mysqli_query($connection, "SELECT camp_id, camp_name FROM camp");
while($row = mysqli_fetch_assoc($camp_names_query)){
$camp_names[$row['camp_id']] = $row['camp_name'];
}
$count = 0;
foreach($camp_names as $name)
{
  $count++;
  $camps[] = $name;
}
$num_camps = $count;

mysqli_close($connection);
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
 ?>
 <script>
 window.onload = function () {

   var chart = new CanvasJS.Chart("graphContainer", {
    backgroundColor: "#faf7f5",
    title:{
      text: "Enrollment Over Time",
      labelFontFamily: "Arial"
    },
    axisX:{
         labelFontSize: 15,
        labelFontFamily: "Arial"
       },
    data: [
      {
    type: "line",
    dataPoints: [
        { x: new Date(2012, 00, 1), y: 450 },
        { x: new Date(2012, 01, 1), y: 414 },
        { x: new Date(2012, 02, 1), y: 520 },
        { x: new Date(2012, 03, 1), y: 460 },
        { x: new Date(2012, 04, 1), y: 450 },
        { x: new Date(2012, 05, 1), y: 500 },
        { x: new Date(2012, 06, 1), y: 480 },
        { x: new Date(2012, 07, 1), y: 480 },
        { x: new Date(2012, 08, 1), y: 410 },
        { x: new Date(2012, 09, 1), y: 500 },
        { x: new Date(2012, 10, 1), y: 480 },
        { x: new Date(2012, 11, 1), y: 510 }
        ]
  }
  ]
  });
  chart.render();
 	//graph of total enrollment in our camp over time
 	var chart = new CanvasJS.Chart("barContainer", {
 		backgroundColor: "#faf7f5",
 		title:{
 			text: "Enrollment Per Camp",
 			labelFontFamily: "Arial"
 		},

 		data: data,
 			// Change type to "doughnut", "line", "splineArea", etc.
 		});
 	chart.render();


 	//graph of total enrollment in our camp over time


 }
 var num = "<?php echo $num_camps; ?>";
 var camps = <?php echo '["' . implode('", "', $camps) . '"]' ?>;

 var limit = num;

    var y = 0;
    var data = []; var dataSeries = { type: "doughnut" };
    var dataPoints = [];
    for (var i = 0; i < limit; i += 1) {
      y += 10;
         dataPoints.push({
          label: camps[i],
          y: y
           });
        }
     dataSeries.dataPoints = dataPoints;
     data.push(dataSeries);

 </script>
<!DOCTYPE HTML>
<html>
    <head>
        <title>EduCamps Inc - Data</title>
        <link href=../stylesheets/main.css media=screen rel=stylesheet type=text/css />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <script type='text/javascript' src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type = 'text/javascript' src = "data.js"></script>
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

/*
  dataPoints: [
 	{ label: "Apache",  y: 10  },
 	{ label: "Eureka",  y: 10  },
 	{ label: "Santa Clara", y: 15  },
 	{ label: "Tahoe South", y: 25  },
 	{ label: "Boulder",  y: 30  },
 	{ label: "Chesapeake",  y: 28  },
 	{ label: "Grapfruit Resort",  y: 10  },
 	{ label: "Grapfruit Resort 2", y: 15  },
 	{ label: "Little Derby", y: 25  },
 	{ label: "Sweet Bayou",  y: 30  },
 	{ label: "Nestor Camp",  y: 28  },
 	{ label: "Lewis and Clark",  y: 10  },
 	{ label: "Robotics Village", y: 15  },
 	{ label: "Salt Camp", y: 25  },
 	{ label: "Federal Camp",  y: 30  },
 ]*/
