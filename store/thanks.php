<?php
echo "Thanks for your purchase!";
echo "</br><a href='../'>Click here to return to the home page </a>";
echo "</br><a href='../store'> Click here to shop for more!</a>";

$connection = mysqli_connect("localhost","fourthreefour","americo","educamps");
if(!$connection){
    die("Database connection failed: ".mysqli_connect_error());
}

$address = $_POST["billing"]." ".$_POST["city"].", ".$_POST["state"]." ".$_POST["postal"];
$email = $_POST["email"];
$items = $_POST["items"];

$add_order_query = mysqli_query($connection, "INSERT INTO orders (address, email, items) VALUES ('$address', '$email', '$items');");
if(!$add_order_query){
    die("Query failed: ".mysqli_error($connection));
}

mysqli_close($connection);
?>