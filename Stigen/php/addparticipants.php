<?php
	include_once("config.php");

if(isset( $_POST['submit']))  {
	
    $pid =   mysqli_real_escape_string($mysqli, $_POST['pid']);
	$name =  mysqli_real_escape_string($mysqli, $_POST['name']);
	$usn =   mysqli_real_escape_string($mysqli, $_POST['usn']);
	$eid =   mysqli_real_escape_string($mysqli ,$_POST['eid']);
	
 
		
	$result = mysqli_query($mysqli,"INSERT INTO participants(pid,name,usn,eventid) VALUES('$pid','$name','$usn','$eid')");
		header('location:http://localhost/Stigen/participants.php');
	}

  ?>