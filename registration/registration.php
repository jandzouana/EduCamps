<!DOCTYPE html>
<html>
    <head>
        <title>Your Camp Order</title>
        <?php
            $cost = $_REQUEST[duration]*50;
            $icon = "smiley.png";
            if($_REQUEST[email]=="acarvalhogoncalves@scu.edu")
                $icon = "eric.jpg";
        ?>
        <script src=pay.js type="text/javascript"></script>
        <link href=../stylesheets/main.css media=screen rel=stylesheet type=text/css />
    </head>
    <body>
        <div id=menubar>
						<a href="../">
            	<img src="../<?= $icon ?>" alt="EduCamps logo" />
						</a>
            <table>
                <tr>
                    <td><a href=schedule.html>Schedule</a></td>
                    <td><a href=registration.html>Registration</a></td>
                    <td><a href=store.html>Store</a></td>
                    <td><a href=gallery.html>Gallery</a></td>
                    <td><a href=forum.html>Forum</a></td>
                    <td><a href=data.html>Data</a></td>
                    <td><a href=activities.html>Activities</a></td>
                </tr>
            </table>
        </div>
        <p>Your Camp Order: $<?= $cost ?>
        </p>
        <button id=pay>Pay With (PayPal)</button>
    </body>
</html>