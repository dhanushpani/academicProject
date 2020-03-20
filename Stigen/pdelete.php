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

	$pid = $_GET['pid'];
    $result = mysqli_query($conn, "DELETE FROM participants WHERE pid=$pid");
    header('location:http://localhost/Stigen/participants.php');

}
?>