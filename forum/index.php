<!DOCTYPE html>
<html>
    <head>
        <title>EduCamps Inc - Forum Submit</title>
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
            <div id="forum_main_content" class = "main_content">

            <h2> Reviews </h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a congue elit. Cras vehicula bibendum dolor vel consectetur. Phasellus pretium id nisl sit amet imperdiet. Praesent vehicula purus vel tempus maximus. Fusce aliquam quam enim, eget laoreet lorem semper eget. Sed malesuada tortor consectetur massa consectetur, tempus mollis est dignissim.</p>

                <form action = "forum.php" action = "post">
                    <div class = "commenter_info">
                        <label> Name: <input type = "text" name = "name" ></label> <br/>
                        <label> Email: <input type = "text" name = "email" ></label>
                    </div>
                     <div class = "stars">
                        <p>Rating: </p>
                        <input class="star star-5" id="star-5" type="radio" name="star" value = "5"/>
                        <label class="star star-5" for="star-5"></label>
                        <input class="star star-4" id="star-4" type="radio" name="star" value = "4"/>
                        <label class="star star-4" for="star-4"></label>
                        <input class="star star-3" id="star-3" type="radio" name="star" value ="3"/>
                        <label class="star star-3" for="star-3"></label>
                        <input class="star star-2" id="star-2" type="radio" name="star" value = "2"/>
                        <label class="star star-2" for="star-2"></label>
                        <input class="star star-1" id="star-1" type="radio" name="star" value = "1"/>
                        <label class="star star-1" for="star-1"></label>
                         <br/>
                     </div>
                    <br/>
                    <br/>
                    <textarea name = "content" cols = 75% rows = 10 placeholder="Provide your review here"></textarea> <br/>
                    <input type=submit name="Submit" class="button2"/>
                </form>

            <br/>
            <br/>
            <h2> Top Customer Reviews </h2>
            <br/>
            <?php

            $connection = mysqli_connect("localhost", "fourthreefour", "americo", "educamps");
            if (!$connection){
                die("Database connection failed: " . mysqli_connect_error());
            }
            $rvwquery = mysqli_query($connection, "SELECT name, stars, content, post_date, stars FROM forum ORDER BY post_date DESC LIMIT 5");
            if(!$rvwquery)
            {
              die("SQL query failed:\n$query\n". mysql_error());
            }
                while($review = mysqli_fetch_assoc($rvwquery)){
                    ?>
                    <h4> On <?= $review['post_date'] ?> <?= $review['name'] ?> wrote: </h4>
                    <div class = "stars">
                    <?php for($i = 5; $i >=1; $i--)
                    {
                        if($i > $review["stars"]){?>
                          <input class="star" type="radio"/>
                          <label class="star" ></label>
                      <?php  }
                      else if($i <= $review["stars"]){ ?>
                        <input class="star" type="radio" checked = "checked"/>
                        <label class="star" for="star-<?=$i ?>"></label>
                    <?php  }

                    }?>
                      </div>
                    <p> <?=$review['content']?> </p>
                    <br/>
                    <?php
                      }
            mysqli_close($connection);

              ?>

             </div>

        </div>

    </body>
</html>
