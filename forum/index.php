<!DOCTYPE HTML>
<?php function Query($query, $connection){
  $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
  if ($result) {
      $errTyp = "success";
      $errMSG = "Review successfully added \n";
      echo $errMSG;#need to comment this out after testing
      unset($cname);
      unset($birthday);
     } else {
      $errTyp = "danger";
      $errMSG = "Something went wrong, go back and try again...";
      echo $errMSG; #need to move this after testing
     }
}
?>

<html>
    <head>
        <title>EduCamps Inc - Forum</title>
        <link href=../stylesheets/main.css media=screen rel=stylesheet type=text/css />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class=main_container>
            <div id=menubar>
                <a href="../">
									<img id="logo" src="../icons/logo.svg" alt="EduCamps logo" />
                </a>
                <table>
                    <tr>
                        <td><a href=../schedule>Schedule</a></td>
                        <td><a href=../registration>Registration</a></td>
                        <td><a href=../store>Store</a></td>
                        <td><a href=../gallery>Gallery</a></td>
                        <td><a href=../forum>Forum</a></td>
                        <td><a href=../data>Data</a></td>
                        <td><a href=../activities>Activities</a></td>
                    </tr>
                </table>
            </div>
            <div id="forum_main_content" class = "main_content">

            <h2> Reviews </h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a congue elit. Cras vehicula bibendum dolor vel consectetur. Phasellus pretium id nisl sit amet imperdiet. Praesent vehicula purus vel tempus maximus. Fusce aliquam quam enim, eget laoreet lorem semper eget. Sed malesuada tortor consectetur massa consectetur, tempus mollis est dignissim.</p>

                <form action = "forum.php" action = POST>
                    <div class = commenter_info>
                        <label> Name: <input type = "text" name = "name"></label> <br/>
                        <label> Email: <input type = "text" name = "name"></label>
                    </div>
                     <div class = "stars">
                        <p>Rating: </p>
                        <input class="star star-5" id="star-5" type="radio" name="star"/>
                        <label class="star star-5" for="star-5"></label>
                        <input class="star star-4" id="star-4" type="radio" name="star"/>
                        <label class="star star-4" for="star-4"></label>
                        <input class="star star-3" id="star-3" type="radio" name="star"/>
                        <label class="star star-3" for="star-3"></label>
                        <input class="star star-2" id="star-2" type="radio" name="star"/>
                        <label class="star star-2" for="star-2"></label>
                        <input class="star star-1" id="star-1" type="radio" name="star"/>
                        <label class="star star-1" for="star-1"></label>
                         <br/>
                     </div>
                    <br/>
                    <br/>
                    <textarea id = "reviewtext" cols = 75% rows = 10 placeholder="Provide your review here"></textarea> <br/>
                    <input type=submit name="Submit" class="button2"/>
                </form>

            <br/>
            <br/>
            <h2> Top Customer Reviews </h2>
            <br>
            <?php
            *$query = "SELECT name, stars, content FROM forum_tb LIMIT 5";
            $results = Query($query, $connection);

            while($row = mysql_fetch_array($results))
            {
              /*$starNumber = $row['stars'];
                  for($x=1;$x<=$starNumber;$x++) {
                      echo '<img src="path/to/star.png" />';
                    }
                  if (strpos($starNumber,'.')) {
                      echo '<img src="path/to/half/star.png" />';
                      $x++;
                    }
                    while ($x<=5) {
                      echo '<img src="path/to/blank/star.png" />';
                      $x++;
                    }
                    ?>
                    */

            <h4> Written by <?= $row['name'] ?> on <?= $row['date'] ?> </h4>
            <h5> Stars: <?= $row['stars']?></h5>
            <br/>
            <br/>
            <p> <?=$row['content']?> </p>
            <br/>

            }
             ?>
             </div>

        </div>

    </body>
</html>
