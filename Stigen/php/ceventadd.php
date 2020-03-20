<?php
	include_once("config.php");

if(isset($_POST['submit'])) {


    $eventname =       mysqli_real_escape_string($mysqli, $_POST['eventname']);
	$eventid =         mysqli_real_escape_string($mysqli, $_POST['eventid']);
	$eventlocation =   mysqli_real_escape_string($mysqli, $_POST['eventlocation']);
	$eventtime =       mysqli_real_escape_string($mysqli, $_POST['eventtime']);
	
	if( empty($eventname) || empty($eventid) || empty($eventlocation) || empty($eventtime) ){

		if(empty($eventname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		 		
		if(empty($eventid)) {
			echo "<font color='red'>USN field is empty.</font><br/>";
		}
		
		if(empty($eventtime)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if(empty($eventlocation)) {
			echo "<font color='red'>PhoneNumber field is empty.</font><br/>";

		}
	}
		else{
	     $result = mysqli_query($mysqli, "INSERT INTO event(eventname,eventid,eventlocation,eventtime) VALUES('$eventname','$eventid','$eventlocation','$eventtime')");
        	   echo "added sucessfully";
        	   header('location:http://localhost/Stigen/cevent.php');
        	  
	}
}
?>