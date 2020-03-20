<?php
	include_once("config.php");


if(isset($_POST['Submit'])) {
	
    $FullName = mysqli_real_escape_string($mysqli, $_POST['FullName']);
	$USN = mysqli_real_escape_string($mysqli, $_POST['USN']);
	$Email = mysqli_real_escape_string($mysqli, $_POST['Email']);
	$dob = mysqli_real_escape_string($mysqli, $_POST['dob']);
	$PhoneNumber = mysqli_real_escape_string($mysqli, $_POST['PhoneNumber']);
	$Semester = mysqli_real_escape_string($mysqli, $_POST['Semester']);
	$Password = mysqli_real_escape_string($mysqli, $_POST['Password']);
	$CPassword = mysqli_real_escape_string($mysqli, $_POST['CPassword']);
 
		if( empty($FullName) || empty($USN) || empty($Email) || empty($PhoneNumber)  || empty($Semester) || empty($Password) || empty($CPassword)){

		if(empty($FullName)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		 		
		if(empty($USN)) {
			echo "<font color='red'>USN field is empty.</font><br/>";
		}
		

		if(empty($Email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if(empty($PhoneNumber)) {
			echo "<font color='red'>PhoneNumber field is empty.</font><br/>";

		}
		if(empty($Semester)) {
			echo "<font color='red'>Semester field is empty.</font><br/>";
		}
		if(empty($Password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
		if(empty($CPassword)) {
			echo "<font color='red'>CPassword field is empty.</font><br/>";
		}
	}
		
	if ($Password != $CPassword) {
		echo "<font color='red'>password not matched.</font><br/>";
	}

	else {

		$result = mysqli_query($mysqli, "INSERT INTO student(name,usn,dob,email,sem,phone,password) VALUES('$FullName','$USN','$dob','$Email','$Semester','$PhoneNumber','$Password')");

		
		header('location: http://localhost/Stigen/login.html');
	}
}

?>	
