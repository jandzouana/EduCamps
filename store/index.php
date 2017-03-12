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
            <div id="store-wrap">
	            <div id="store_main_content" class = "main_content">
                    <form action="confirmation.php" method="POST">
                        <h1>Store</h1>
                            
                        <?php
                        
                        ?>
                        
                        <h4><a name="shirts">SHIRTS</a></h4>
                        <div class="store-images-container">
                            <div class="item">
                                <div class="store-img" id="i1">
                                    <img src="storeimages/red_shirt.jpg" alt="red shirt"/>
                                </div>
                                <div class="price">
                                    <h4>Price</h4>
                                    <p>$14.50</p>
                                </div>
                                <div class="quantity">
                                    <p>Quantity</p>
                                    <input type="number" name="val1" min="0" max="5" value="0"/>
                                </div>
                            </div>
                            <div class="item">
                                <div class="store-img" id="i2">
                                    <img src="storeimages/orange_shirt.png" alt="orange shirt"/>
                                </div>
                                <div class="price">
                                    <h4>Price</h4>
                                    <p>$11.50</p>
                                </div>
                                <div class="quantity">
                                    <p>Quantity</p>
                                    <input type="number" name="val2"  min="0" max="5" value="0"/>
                                </div>
                            </div>
                            <div class="item">
                                <div class="store-img" id="i3">
                                    <img src="storeimages/blue_shirt.jpg" alt="blue shirt"/>
                                </div>
                                <div class="price">
                                    <h4>Price</h4>
                                    <p>$12.50</p>
                                </div>
                                <div class="quantity">
                                    <p>Quantity</p>
                                    <input type="number" name="val3"  min="0" max="5" value="0"/>
                                </div>
                            </div>
                        </div>
                        <h4><a name="gifts">GIFTS</a></h4>
                        <div class="store-images-container">
                            <div class="store-img" id="i4">
                                <img src="storeimages/plush-toy-elephant.jpg" alt="elephant"/>
                            </div>
                            <div class="store-img" id="i5">
                                <img src="storeimages/headphones.jpg" alt="headphones"/>
                            </div>
                            <div class="store-img" id="i6">
                                <img src="storeimages/mouse.jpg" alt="mouse"/>
                            </div>
                        </div>
                        <h4><a name="backpack">BACKPACKS</a></h4>
                        <div class="store-images-container">
                            <div class="store-img" id="i7">
                                <img src="storeimages/herschel.jpg" alt="herschel"/>
                            </div>
                            <div class="store-img" id="i8">
                                <img src="storeimages/rucksack.jpg" alt="rucksack"/>
                            </div>
                            <div class="store-img" id="i9">
                                <img src="storeimages/Voltaic.jpg" alt="voltaic"/>
                            </div>
                        </div>
                        <p id="discount-message">Enter your email address below if you are registered to recieve a 15% discount!</p>
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
