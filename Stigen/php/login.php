<?php

	$username = $_POST['name'];
	$usn  = $_POST['usn'];
	$password = $_POST['password'];

	include_once("config.php");

	$username = mysqli_real_escape_string($mysqli, $_POST['name']);
	$usn = mysqli_real_escape_string($mysqli, $_POST['usn']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	

	$result= mysqli_query($mysqli,"SELECT * FROM student WHERE name ='$username' AND usn = '$usn' AND password ='$password'")
		or die("failed to enter database".mysql_error());
	
	$row= mysqli_fetch_array($result);


	if($row['name'] == $username   && $row['password'] ==  $password){
		header('location:http://localhost/Stigen/phome.htm');
	}
	else{
		echo "failed";
	}
?>

