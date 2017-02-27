<!DOCTYPE html>
<html>
    <head>
        <title>Your Camp Order</title>
        <?php
            $cost = $_REQUEST[duration]*50;
        ?>
        <script src=pay.js type="text/javascript"></script>
        <link href=../stylesheets/main.css media=screen rel=stylesheet type=text/css />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
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
            <div class = "main_content">
                <p>Your Camp Order: $<?= $cost ?></p>
                <img src="../icons/PayPal.png" alt="Pay with PayPal" id="pay" />
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