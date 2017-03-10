<!DOCTYPE html>

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
							<?php
							$num_stars = _REQUEST["stars"];
							if(isset($_POST["content"])){
										$con = mysqli_connect("localhost", "fourthreefour", "americo", "educamps");
										if(!$con){
											die("SQL error occurred on connect: ". mysql_error());
										}
										$name = $_POST["name"];
										$email = $_POST["email"];
										$content = $_POST["content"];
										mysqli_query($con,"INSERT INTO forum(name, email, stars, content) VALUES($name, $email, $stars, $content)");
										mysqli_close($con);
									}
									echo "Review Submitted";
								?>
						</div>
					</body>
				</html>
