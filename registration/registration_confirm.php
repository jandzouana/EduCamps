<!DOCTYPE HTML>
 <html>
     <head>
         <title>EduCamps Inc - Registration</title>
         <link href="../stylesheets/main.css" media="screen" rel="stylesheet" type="text/css" />
         <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
     </head>
     <body>
         <div class=main_container>
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
             <div id="reg_confirm_content" class = "main_content">
							 <br/>
							 <br/>
							 <?php
							 if (empty($_POST['billing'])) {
							 	#if try to access page without access, then redirect back to registration page
							 	header('Location: http://localhost:7080/jess/EduCamps/registration/');
							 }
							 echo "Successully Registered";
							  ?>
								<br/>
								<br/>
								<br/>
									<a href= '../' class="button">Head Home</a>

								<br/>
							</br>

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
