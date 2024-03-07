<?php  
require 'dbconnect.php';
if ($_SERVER['REQUEST_METHOD'] =="POST") {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$password = $_POST['password'];
	//$enc_password=md5($password);

	if (empty($email)) {
		header("Location: index.php?error=email is required");
	    die;
	}else if(empty($password)){
        header("Location: index.php?error=Password is required");
	    die;
	}
	else{
		$sql = "SELECT * FROM registration WHERE email='$email' AND password='$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $password) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['name'] = $row['name'];
            	header("Location: index.php");
		        die;
            }else{
				header("Location: index.php?error=Incorect email or password");
		        die;
			}
		}else{
			header("Location: index.php?error=Incorect email or password");
	        die;
		}
	}
	
}else{
}
?>