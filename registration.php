<?php
include "admin/dbconnect.php";
?>
<?php
if (isset($_POST['submit'])) 
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password = $_POST['password'];
	if (!empty($name) && !empty($email) && !empty($mobile) && !empty($password))
	{
		$sql = " INSERT INTO registration (name, email, mobile, password) VALUES ('$name','$email','$mobile','$password')";
		$result1 = mysqli_query($conn,$sql);
	}
	header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<center><h1>User Registration Form</h1></center>
	<center><form action="" method="POST">
	Name:<br>
	<input type="text" name="name" required><br><br>
	Email:<br>
	<input type="text" name="email" required><br><br>
	Mobile:<br>
	<input type="number" name="mobile" required><br><br>
	Password:<br>
	<input type="password" name="password" required><br><br>
	<button style="cursor: pointer;" type="submit" name="submit">Register</button>
	<a href="index.php">Login</a>
</form></center>
</body>
</html>