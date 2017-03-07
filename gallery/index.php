<!DOCTYPE HTML>
<html>
    <head>
        <title>EduCamps Inc - Gallery</title>
        <link href="../stylesheets/main.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        <div class="main_container">
            <div id="menubar">
                <a href="../">
                    <img id="logo" src="../icons/logo.svg" alt="EduCamps logo" />
                </a>
                <table>
                    <tr>
                        <td><a href="../schedule">Schedule</a></td>
                        <td><a href="../registration">Registration</a></td>
                        <td><a href="../store">Store</a></td>
                        <td><a href="../gallery">Gallery</a></td>
                        <td><a href="../forum">Forum</a></td>
                        <td><a href="../data">Data</a></td>
                        <td><a href="../activities">Activities</a></td>
                    </tr>
                </table>
            </div>
            <div id= "gallery_main_content" class = "main_content">
                <h1>Gallery</h1>
                <div id="gallery_form">
                    <form action="submitimage.php" method="post" enctype="multipart/form-data">
                        <label>Share your own memory!<br/><input type="file" required="required" name="image_submission" /></label><br/>
                        <label>Your Name: <input type="text" required="required" name="name"/></label><br/>
                        <label>Caption: <input type="text" required="required" name="caption"/></label><br/>
                        <input type="submit" value="Submit Image" class="button" />
                    </form>
                </div>
                <div id="gallery_images">
                    <?php
                    if(count(glob("images/*"))){
                        foreach(glob("images/*") as $image){
                            $filename = basename($image);
                            echo "<p><img src=$image alt=$filename></img></p>";
                        }
                    }
                    else{
                        echo "No images found.";
                    }
                    ?>
                    <?php
                    $connection = mysqli_connect("localhost", "root", "", "educamps");
                    if (!$connection){
                        die("Database connection failed");
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