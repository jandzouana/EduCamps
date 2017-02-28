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
          <form id="conf_main_content" class = "main_content">
						<div method=post class="billing">
							<h1>Billing Information </h1>

							<label>Full Name</label>
							<input type="text" name="fullname" size=20 required /><br/>
							<label>Address</label>
							<input type="text" name="address" size=20 required /><br/>
						</div>
						<?php
						#need to add more prices
						$prices = array(14.50, 11.50, 12.50);
						$val = array();
						$order_bought = array();
						$items = array("Shirt 1", "Shirt 2", "Shirt 3");
						$shipping = 5.00;
						if ($_SERVER["REQUEST_METHOD"] == "POST") {
							#need to change i to 10
							$discount = .15;
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
							#$subtotal = $val[1]*$prices[0]+$val[2]*$prices[1];
							#need to change i to 10
							$subtotal = 0;
							for($i = 0; $i < sizeof($prices); $i++){
								$subtotal = $subtotal + $val[$i]*$prices[$i];
							}
							$discount_applied = .15*$subtotal;
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
							<input type="submit" value="Confirm">
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
					</form>
        </div>
    </body>
</html>
