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

	$cid = $_GET['cid'];
    $result = mysqli_query($conn, "DELETE FROM coordinator WHERE cid=$cid");

//redirecting to the display page (index.php in our case
   echo "removed sucessfully";
   header('location:http://localhost/Stigen/cview.php');
}
?>

