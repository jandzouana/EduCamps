<?php
if (empty($_POST['billing'])) {
	#if try to access page without access, then redirect back to store page
	header('Location: http://localhost:7080/jess/EduCamps/store/');
}
	echo "Thanks for your purchase!";
	echo "</br><a href='../'Click here to return to the home page </a>";
	echo "</br><a href='../store'Click here to shop for more!</a>";
?>
