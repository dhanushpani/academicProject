<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	include_once("config.php");

	 $username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);

	$result= mysqli_query($mysqli,"SELECT * FROM admin WHERE username ='$username' AND password ='$password'")
		or die("failed to enter database".mysql_error());

	$row= mysqli_fetch_array($result);
	if($row['username'] == $username   && $row['password'] ==  $password){
		header('Location: http://localhost/Stigen/admin.htm');
	}
	else{
		echo "failed";
	}
?>


