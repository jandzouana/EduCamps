<!DOCTYPE HTML>
<html>
    <head>
        <title>EduCamps Inc - Store</title>
        <link href=../stylesheets/main.css media=screen rel=stylesheet type=text/css />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    </head>
    <body>
        <div class="main_container" id="store_container">
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
            <div id="store-wrap">
	            <div id="store_main_content" class = "main_content">
                    <form action="confirmation.php" method="POST">
                        <h1>Store</h1>
                        <div class="store-images-container">
                        <?php
                        $connection = mysqli_connect("localhost", "fourthreefour", "americo", "educamps");
                        if(!$connection){
                            die("Database connection failed: ".mysqli_connect_error());
                        }
                        $items_query = mysqli_query($connection, "SELECT item_id, name, price, image_file, category FROM store ORDER BY category");

                        $current_category = "";
                        while($row = mysqli_fetch_assoc($items_query)){
                            if($row["category"] != $current_category){
                                $current_category = $row[category];
                                echo "<h3>".$current_category."</h3>";
                            }
                            $source = "storeimages/".$row["image_file"];
                            ?>
                            <div class="item">
                                <div class="store-img" id="<?=$row["item_id"]?>">
                                    <img src="<?=$source?>"/>
                                </div>
                                <div class="item-name">
                                    <?=$row["name"]?>
                                </div>
                                <div class="price">
                                    <h4>Price</h4>
                                    <p><?=$row["price"]?></p>
                                </div>
                                <div class="quantity">
                                    <p>Quantity</p>
                                    <input type="number" name="<?="item".$row["item_id"]?>" min="0" max="5" value="0"/>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        </div>
                        <p id="discount-message">If you're registered for a camp, enter your email address below to recieve a 15% discount!</p>
                        <div class="email">
                            <h4>Email</h4>
                            <input type="text" name="pemail"/>
                        </div>
                        <input type="submit" value="Checkout" class="button2"/>
                    </form>
	            </div>
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
