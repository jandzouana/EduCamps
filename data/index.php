
<?php
$camp_names = array(); #Jessica added this
$connection = mysqli_connect("localhost", "fourthreefour", "americo", "educamps");
if (!$connection){
die("Database connection failed: " . mysqli_connect_error());
}
//to get camp names for x axis
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
//end of getting camp names

//to get camp registration numbers

 $reg_nums = array();//parallel array whose indexes correspond to the camp names
for($i = 0; $i < $num_camps; $i++) //initialize registration numbers to zero for each camp
{
  $reg_nums[$i] = 0;
}

$camp_numbers_query = mysqli_query($connection, "SELECT location FROM registration");

while($row = mysqli_fetch_assoc($camp_numbers_query)){
  for($i = 0; $i < $num_camps; $i++)
  {

    if($row['location'] == $camps[$i])
    {
      $reg_nums[$i] += 1;
    }
  }

}

//to get camp total registrations over time
   $total_nums = array();//array is has 12 slots, each one corresponds to the month-1 so $total_nums[0] corresponds to the Jan numbers
   $total_nums[0] = 0;
  $months = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
   /*$i = 1;
   $januaryquery = mysqli_query($connection, "SELECT * FROM registration WHERE (section BETWEEN '2016-<?=$i?>-01'
   AND '2016-<?=$i?>-31')");
   if(!$januaryquery)
   {
     echo "error";
   }
   $count = 0;
   while($row = mysqli_fetch_assoc($januaryquery))
   {
     $count++;
     echo "here";
   }
   echo $count;
  $total_nums[1] = $count;
*/
  for($i = 1; $i <= 12; $i++)
  {
    $monthquery = mysqli_query($connection, "SELECT * FROM registration WHERE (section BETWEEN '2016-<?=$i?>-01'
    AND '2016-<?=$i?>-31')");
    $count = 0;
    while($row = mysqli_fetch_assoc($monthquery))
    {
      $count++;
    }
     $total_nums[$i] = $count;
   }

   /*
   $februaryquery =mysqli_query($connection, "SELECT section FROM registration WHERE section >= 2016-2-01
   AND section <= 2016-2-31");
   $total_nums[2] = mysql_num_rows($februaryquery);
   $marchquery = mysqli_query($connection, "SELECT section FROM registration WHERE section >= 2016-3-01
   AND section <= 2016-3-31");
   $total_nums[3] = mysql_num_rows($marchquery);
   $aprilquery= mysqli_query($connection, "SELECT section FROM registration WHERE section >= 2016-4-01
   AND section <= 2016-4-31");
   $total_nums[4] = mysql_num_rows($aprilquery);
   $mayquery = mysqli_query($connection, "SELECT section FROM registration WHERE section >= 2016-5-01
   AND section <= 2016-5-31");
   $total_nums[5] = mysql_num_rows($mayquery);
   $junequery = mysqli_query($connection, "SELECT section FROM registration WHERE section >= 2016-6-01
   AND section <= 2016-6-31");
   $total_nums[6] = mysql_num_rows($junequery);
   $julyquery = mysqli_query($connection, "SELECT section FROM registration WHERE section >= 2016-7-01
   AND section <= 2016-7-31");
   $total_nums[7] = mysql_num_rows($julyquery);
   $augustquery = mysqli_query($connection, "SELECT section FROM registration WHERE section >= 2016-8-01
   AND section <= 2016-8-31");
   $total_nums[8] = mysql_num_rows($augustquery);
   $septemberquery = mysqli_query($connection, "SELECT section FROM registration WHERE section >= 2016-9-01
   AND section <= 2016-9-31");
   $total_nums[9] = mysql_num_rows($septemberquery);
   $octoberquery = mysqli_query($connection, "SELECT section FROM registration WHERE section >= 2016-10-01
   AND section <= 2016-10-31");
   $total_nums[10] = mysql_num_rows($octoberquery);
   $novemberquery =mysqli_query($connection, "SELECT section FROM registration WHERE section >= 2016-11-01
   AND section <= 2016-11-31");
   $total_nums[11] = mysql_num_rows($novemberquery);
   $decemberquery = mysqli_query($connection, "SELECT section FROM registration WHERE section >= 2016-12-01
   AND section <= 2016-12-31");
   $total_nums[12] = mysql_num_rows($decemberquery);

   $total_nums = array();//array is has 12 slots, each one corresponds to the month-1 so $total_nums[0] corresponds to the Jan numbers
   $total_nums[0] = 0;
   for($i = 1; $i <= 12; $i++)
   {
     $monthquery = mysqli_query($connection, "SELECT * FROM registration WHERE (section BETWEEN '2016-'.<?=$i?>.'-01'
     AND '2016-<?=$i?>-31')");
     if(!$monthquery)
     {
       echo "error at ".$i;
     }
     $count = 0;
     while($row = mysqli_fetch_assoc($monthquery))
     {
       $count++;
      echo "here";
     }
      $total_nums[$i] = $count;
      echo $i.": ".$total_nums[$i];
   }
*/
   mysqli_close($connection);
 ?>
 <script>
 window.onload = function () {
   //graph of total enrollment in our camp over time
   var chart1 = new CanvasJS.Chart("graphContainer", {
    theme: "theme4",
    backgroundColor: "#faf7f5",
    title:{
      text: "Enrollment Over Time",
      labelFontFamily: "Arial"
    },
    axisX:{
         labelFontSize: 15,
        labelFontFamily: "Arial"
       },
    data: data1,
  });
  chart1.render();
 	//graph of distribution of total enrollment for each camp
 	var chart2 = new CanvasJS.Chart("barContainer", {
 		backgroundColor: "#faf7f5",
 		title:{
 			text: "Enrollment Per Camp",
 			labelFontFamily: "Arial"
 		},

 		data: data2,
 			// Change type to "doughnut", "line", "splineArea", etc.
 		});
 	chart2.render();
 }
  //to create data points for registration per camp (doughnut)
   var num = "<?php echo $num_camps; ?>";
   var camps = <?php echo '["' . implode('", "', $camps) . '"]' ?>;
   var reg_nums = <?php echo '["' . implode('", "', $reg_nums) . '"]' ?>;
   var limit = num;

    var data2 = []; var dataSeries = { type: "doughnut" };
    var dataPoints = [];
    for (var i = 0; i < limit; i += 1) {
         dataPoints.push({

          label: camps[i],
          y: reg_nums[i]
           });
        }
     dataSeries.dataPoints = dataPoints;
     data2.push(dataSeries);

      //to create data points for registration per month (line)
     var months = <?php echo '["' . implode('", "', $months) . '"]' ?>;
     var total_nums = <?php echo '["' . implode('", "', $total_nums) . '"]' ?>;
     var tot_num =[0, 9, 6, 3, 3, 6, 6, 3, 3, 3, 3, 0, 12];

     var data1 = []; var dataSeries = { type: "line" };
     var dataPoints = [];
     for (var j = 0; j <=12; j+=1) {
          dataPoints.push(
        {x: new Date(2016, j, 1), y: tot_num[j]});
      }
      dataSeries.dataPoints = dataPoints;
      data1.push(dataSeries);


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
