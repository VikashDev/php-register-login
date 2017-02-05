<?php
$servername = "localhost";
$username = "root";
$pass = "1@champ185";
$db = "joke";

// Create coonection

$conn = mysqli_connect($servername, $username, $pass, $db);

// check connection
if (!$conn) {
	die('Connection failed' . mysqli_connect_error());
}

//echo "connection Success";
 ?>
