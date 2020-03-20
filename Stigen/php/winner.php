<?php
	include_once("config.php");

if(isset( $_POST['submit']))  {
	
    $name =   mysqli_real_escape_string($mysqli, $_POST['name']);
	$pos =   mysqli_real_escape_string($mysqli ,$_POST['position']);
	$eid  =   mysqli_real_escape_string($mysqli, $_POST['eid']);
	
 
		
	$result = mysqli_query($mysqli,"INSERT INTO winner(name,position,eid) VALUES('$name','$pos','$eid')");
		
		header('location:http://localhost/Stigen/cwinner.php');
	}

  ?>