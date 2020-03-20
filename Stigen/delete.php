<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "123456789";
$dbname = "test";

$conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname);

if (mysqli_connect_error()){
	die('connect error('.mysqli_connect_error().')'.mysqli_connect_error());
}
else{

	$eventid = $_GET['eventid'];
    $result = mysqli_query($conn, "DELETE FROM event WHERE eventid=$eventid");

//redirecting to the display page (index.php in our case)


   header('location:http://localhost/Stigen/cevent.php');
}
?>
