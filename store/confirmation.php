<?php
	include_once '../dbconnect.php'; 	#contains connectDB function

	#database information (may change from computer to computer)
	$database = 'educamps';
	$dbserver = 'localhost';
	$dbusername = 'fourthreefour';
	$dbpass = 'americo';
	#connection to database server
	$connection = connectDB($database, $dbserver, $dbusername, $dbpass); #from dbconnect.php

	function CreateQueryString($dbtable, $dbinputs){
		#		$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
		$dboutputs = array();
		$temp2 = '';
		for ($i = 0; $i < sizeof($dbinputs); $i++){
			$dboutputs[$i] = trim($_POST[$dbinputs[$i]]);
			$dboutputs[$i] = strip_tags($dboutputs[$i]);
			$dboutputs[$i] = htmlspecialchars($dboutputs[$i]);
			if($dbinputs[$i]=="password"){
						$dboutputs[$i] = CreateHash($_POST[$dbinputs[$i]]);
			}
			$temp2 =  $temp2 . $dbinputs[$i] . "=" ."'" . $dboutputs[$i] . "'";
			if ($i!=sizeof($dbinputs)-1) {
				$temp2 = $temp2 . ' and ';
			}
		}
		$query = "SELECT * FROM ". $dbtable. " WHERE " . $temp2;
		return $query;
	}
	function QueryLogin($query, $connection){
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		$count = mysqli_num_rows($result);
		return $count;
	}
	function ApplyDiscount($discount, $connection, $message){
		$dbtable = 'account';
		$dbinputs = array("pemail");
		$applied = 0;
		if((QueryLogin(CreateQueryString($dbtable, $dbinputs), $connection))>=1){
			$message = "Email found.";
			$applied = $discount;
		}
		$message = "Email not found.";
		return $applied;
	}
 ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>EduCamps Inc - Confirmation</title>
        <link href=../stylesheets/main.css media=screen rel=stylesheet type=text/css />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    </head>
    <body>
        <div class="main_container" id="store_container">
            <div id=menubar>
                <a href="../">
                    <img id="logo" src="../icons/logo.svg" alt="EduCamps logo" /><label id="topname">Educamps</label>
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
            <form id="conf_main_content" class = "main_content" action="thanks.php">
                <div class="billing">
                    <h1>Billing Information </h1>
										<label>Cardholder's Name:</label>
										<input type="text" name="cardname" size="20" required />
										<label>Card Number:</label>
										<input type="number" name="cnumber" minlength="5" maxlength="5" required />
										<label>Card Type:</label>
										<select name="cardtype" required>
										 <option value="1">Visa</option>
										 <option value="2">Mastercard</option>
										 <option value="3">Amex</option>
										 <option value="4">Discover</option>
										</select>
										<label>Expiration Date(MMYY):</label>
										<input type="text" name="expiration" minlength="4" maxlength="4" required />
										<label>CVV:</label>
										<input type="text" name="cvv" minlength="3" maxlength="3" required />
										<label>Billing Address:</label>
										<input type="text" name="billing" size="20" required />
										<label>State</label>
										<select name="state" required>
											<option value="AL">Alabama</option>
											<option value="AK">Alaska</option>
											<option value="AZ">Arizona</option>
											<option value="AR">Arkansas</option>
											<option value="CA">California</option>
											<option value="CO">Colorado</option>
											<option value="CT">Connecticut</option>
											<option value="DE">Delaware</option>
											<option value="DC">District Of Columbia</option>
											<option value="FL">Florida</option>
											<option value="GA">Georgia</option>
											<option value="HI">Hawaii</option>
											<option value="ID">Idaho</option>
											<option value="IL">Illinois</option>
											<option value="IN">Indiana</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
											<option value="LA">Louisiana</option>
											<option value="ME">Maine</option>
											<option value="MD">Maryland</option>
											<option value="MA">Massachusetts</option>
											<option value="MI">Michigan</option>
											<option value="MN">Minnesota</option>
											<option value="MS">Mississippi</option>
											<option value="MO">Missouri</option>
											<option value="MT">Montana</option>
											<option value="NE">Nebraska</option>
											<option value="NV">Nevada</option>
											<option value="NH">New Hampshire</option>
											<option value="NJ">New Jersey</option>
											<option value="NM">New Mexico</option>
											<option value="NY">New York</option>
											<option value="NC">North Carolina</option>
											<option value="ND">North Dakota</option>
											<option value="OH">Ohio</option>
											<option value="OK">Oklahoma</option>
											<option value="OR">Oregon</option>
											<option value="PA">Pennsylvania</option>
											<option value="RI">Rhode Island</option>
											<option value="SC">South Carolina</option>
											<option value="SD">South Dakota</option>
											<option value="TN">Tennessee</option>
											<option value="TX">Texas</option>
											<option value="UT">Utah</option>
											<option value="VT">Vermont</option>
											<option value="VA">Virginia</option>
											<option value="WA">Washington</option>
											<option value="WV">West Virginia</option>
											<option value="WI">Wisconsin</option>
											<option value="WY">Wyoming</option>
										</select>
										<label>City:</label>
										<input type="text" name="city" size="20" required />
										<label>Postal Code:</label>
										<input type="number" name="postal" minlength"4" maxlength="5" required />
										<label>Phone number:</label>
										<input type="number" name="phone" minlength"10" maxlength="10" required />
                </div>
                <?php
                #need to add more prices and items
                #put prices and items to a separate php file so that we don't
                #need to modify both store and confirmation page if need be?
                $prices = array(14.50, 11.50, 12.50);
                $val = array();
                $order_bought = array();
                $items = array("Shirt 1", "Shirt 2", "Shirt 3");
                $shipping = 5.00;
								$msg = '';
                $discount = ApplyDiscount(0.15, $connection, $msg);
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    for($i = 0; $i < sizeof($prices); $i++){
                        $temp = 'val'. ($i+1);
                        $val[$i] =  $_POST[$temp];
                        if($val[$i]!=0) {
                            $order_bought[$i] = 1;
                        }
                        else {
                            $order_bought[$i] = 0;
                        }
                    }
                    $subtotal = 0;
                    for($i = 0; $i < sizeof($prices); $i++){
                        $subtotal = $subtotal + $val[$i]*$prices[$i];
                    }
                    $discount_applied = $discount*$subtotal;
                    $total = $subtotal - $discount_applied;
                    $tax = 0.0975 * $total;
                    $total = $total + $tax +$shipping;
                }
                ?>
                <div class="order-confirm">
                    <h1>Order Confirmation </h1>
                    <div class="cart-items">
                        <div class="item_print" id="item_print_header">
                            <p>Items</p>
                            <div>
                                <p>Price</p>
                                <p>Quantity</p>
                            </div>
                        </div>
                        <?php
                            for($i = 0; $i < sizeof($prices); $i++){
                                if($order_bought[$i]==1){
                                    echo "<div class=\"item_print\">";
                                    echo "<p> $items[$i] </p>";
                                    echo "<div>";
                                    echo "<p> $prices[$i] </p>";
                                    echo "<p> $val[$i] </p>";
                                    echo "</div>";
                                    echo  "</div>";

                                }
                            }
                        ?>
                    </div>
                    <div class="total">
                        <p> Subtotal: $<?php echo $subtotal;?> </p>
                        <p> Discount: -$<?php echo $discount_applied;?> </p>
                        <p> Tax: $<?php echo number_format($tax, 2);?> </p>
                        <p> Shipping: $<?php echo $shipping;?> </p>
                        <p> Total: $<?php echo number_format($total, 2);?> </p>
                    </div>
                    <input type="submit" value="Confirm" class="button">
                </div>
            </form>
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
    </body>
</html>
