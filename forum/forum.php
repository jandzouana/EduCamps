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
							<div id = "forum_submit_content" class = 'main_content'>
								<h1> Reviews </h1>
								<p> Your Review was submitted. Thank you for your feedback. </p>
							<br/>
							<br/>
								<h2> Top Customer Reviews </h2>
							<?php
							$stars = $_REQUEST['star'];
										$connection = mysqli_connect("localhost", "fourthreefour", "americo", "educamps");
										if(!$connection){
											die("SQL error occurred on connect: ". mysql_error());
										}
										$name = $_REQUEST["name"];
										$email = $_REQUEST["email"];
										$content = $_REQUEST["content"];
										mysqli_query($connection, "INSERT INTO forum(name, email, stars, content)VALUES('$name', '$email', '$stars', '$content')");

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
