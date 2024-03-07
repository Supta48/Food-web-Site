# Food-web-Site
Db Connect
<?php
session_start();
$servername = "localhost";
$username 	= "root";
$password 	= "";
$dbname 	= "foodie";
//Create Connection
$conn 		= mysqli_connect($servername, $username, $password, $dbname);
if ($conn) {
	echo "Database Connected";
}
elseif (!$conn) {
	echo "Database Not Connected";
}
?>
