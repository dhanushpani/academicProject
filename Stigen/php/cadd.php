<?php
	include_once("config.php");

if(isset( $_POST['submit']))  {
	
    $cname = mysqli_real_escape_string($mysqli, $_POST['cname']);
	$cid =       mysqli_real_escape_string($mysqli, $_POST['cid']);
	$cpassword =mysqli_real_escape_string($mysqli, $_POST['cpassword']);
	$eid =        mysqli_real_escape_string($mysqli ,$_POST['eid']);
	
 
		if( empty($cname) || empty($cid) || empty($cpassword) || empty($eid)) {

			if(empty($cname)) {
				echo "<font color='red'>cName field is empty.</font><br/>";
			}
		 		
			if(empty($cid)) {
				echo "<font color='red'>cid field is empty.</font><br/>";
			}	
		
			if(empty($cpassword)) {
				echo "<font color='red'>password field is empty.</font><br/>";
			}
		
			if(empty($eid)) {
				echo "<font color='red'>eventid field is empty.</font><br/>";

			}
		
		}
	else {
	$result = mysqli_query($mysqli,"INSERT INTO coordinator(cname,cid,cpassword,eid) VALUES('$cname','$cid','$cpassword','$eid')");
	   echo "sucessfully added";
	   header('location:http://localhost/Stigen/cview.php');
	     
	}
}
  ?>