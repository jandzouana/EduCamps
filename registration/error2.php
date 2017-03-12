<?php
echo "You have already registered.";
if (empty($_POST['cname'])) {
	#if try to access page without access, then redirect back to home page
	header('Location: http://localhost:7080/jess/EduCamps/registration/');
}

	echo "</br><a href='../'Click here to go back to the home page</a>";
?>
