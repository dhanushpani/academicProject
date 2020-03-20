
<html>
<head>	
	<title>event</title>
	<link rel="stylesheet" type="text/css" href="css\cevent.css">
</head>

<body>
<a href="http://localhost/Stigen/admin.htm">back</a><br/><br/>

	<table width='70%'height='10%' border='0'>

	<tr>
                
		<td>C-NAME</td>
        <td>C-ID</td>
		<td>EVENT-ID</td>
		
	</tr>
<?php
include_once("php/config.php");


 $result = mysqli_query($mysqli, "SELECT c.cid,c.cname,e.eventname FROM coordinator c,event e WHERE c.eid=e.eventid ORDER BY c.cid");

while($res = mysqli_fetch_array($result)){		
		echo "<tr>";
        echo "<td>".$res['cname']."</td>";
		echo "<td>".$res['cid']."</td>";
		echo "<td>".$res['eventname']."</td>";

		 echo"<td bgcolor='grey'> <a href=\"cdelete.php?cid=$res[cid]\" onClick=\"return confirm('Are you sure you want to delete?')\"><font color='black'>Delete</a></td>"; 
	}	
?>
</table>
</body>
</html>
