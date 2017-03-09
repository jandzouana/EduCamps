<?php
if (empty($_POST['billing'])) {
	#if try to access page without access, then redirect back to registration page
	header('Location: http://localhost:7080/jess/EduCamps/registration/');
}
echo "Thank you for the payment!";
echo "</br><a href = '../'>Head home </a>";
 ?>
