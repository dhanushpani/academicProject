  <?php

	include_once("config.php");

	$cid = $_POST['cid'];
	$cpassword = $_POST['cpassword'];

	$cid = mysqli_real_escape_string($mysqli, $_POST['cid']);
	$cpassword = mysqli_real_escape_string($mysqli, $_POST['cpassword']);

	$result= mysqli_query($mysqli,"SELECT * FROM coordinator WHERE cid ='$cid' AND cpassword ='$cpassword'")
		or die("failed to enter database".mysql_error());

	$row= mysqli_fetch_array($result);
	if($row['cid'] == $cid   && $row['cpassword'] ==  $cpassword){
		header('location: http://localhost/Stigen/coordinate.htm');
	}
	else{
		echo "failed";
	}
?>
