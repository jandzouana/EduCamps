<!DOCTYPE HTML>
<html>
    <head>
        <title>EduCamps Inc - Gallery</title>
        <link href="../stylesheets/main.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script type='text/javascript' src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#show_submit').click(function() {
                    $('#gallery_form').show();
                });
            });
        </script>
    </head>
    <body>
        <div class="main_container">
            <div id="menubar">
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
            <div id= "gallery_main_content" class = "main_content">
                <h1>Gallery</h1>
                <button id="show_submit">Submit Your Own Image</button>
                <div id="gallery_form">
                    <form action="submitimage.php" method="post" enctype="multipart/form-data">
                        <label>Share your own memory!<br/><input type="file" required="required" name="image_submission"/></label><br/>
                        <label>Your Name: <input type="text" required="required" name="name"/></label><br/>
                        <label>Caption: <input type="text" required="required" name="caption"/></label><br/>
                        <label>Camp: <select name="location">
                            <?php
                            $connection = mysqli_connect("localhost","fourthreefour","americo","educamps");
                            if(!$connection){
                                die("Database connection failed: ".mysqli_connect_error());
                            }
                            $camp_query = mysqli_query($connection, "SELECT camp_id, name FROM camp_tb");
                            while($row = mysqli_fetch_assoc($camp_query)){
                                echo "<option value=".$row["camp_id"].">".$row["name"]."</option>";
                            }
                            mysqli_close($connection);
                            ?>
                            </select>
                        </label><br/>
                        <input type="submit" value="Submit Image" class="button" />
                    </form>
                </div>
                <div id="gallery_images">
                    <?php
                    $connection = mysqli_connect("localhost", "fourthreefour", "americo", "educamps");
                    if (!$connection){
                        die("Database connection failed: " . mysqli_connect_error());
                    }
                    $imgquery = mysqli_query($connection, "SELECT filename, caption, upload_date, name FROM gallery_tb");
                    if (mysqli_num_rows($imgquery) > 0){
                        while($image = mysqli_fetch_assoc($imgquery)){
                            echo "<p><img src=\"images/".$image["filename"]."\" alt=".$image["caption"]."/><br/>";
                            echo $image[caption]." - ".$image[name]." (".$image[upload_date].")</p>";
                        }
                    }else{
                        echo "No images found.";
                    }
                    mysqli_close($connection);
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
