
<?php

			$connection = mysqli_connect("localhost", "fourthreefour", "americo", "educamps");

			if(!$connection){
				die("SQL error occurred on connect: ". mysql_error());
			}
			$stars = $_POST['star'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$content = $_POST['content'];

			mysqli_query($connection, "INSERT INTO forum(name, email, stars, content)VALUES('$name', '$email', '$stars', '$content')");
			echo "worked";
			mysqli_close($connection);
			?>
