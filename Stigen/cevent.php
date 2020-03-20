
<html>
<head>	
	<title>event</title>
	<link rel="stylesheet" type="text/css" href="css\cevent.css">
</head>

<body>
<a href="http://localhost/Stigen/coordinate.htm">back</a><br/><br/>

	<table width='70%'height='10%' border='0'>

	<tr>
                
		<td>EVENT-ID</td>
        <td>EVENT-NAME</td>
		<td>EVENT-LOCATION</td>
		<td>EVENT-TIME</td>
		
	</tr>
<?php

include_once("php/config.php");


 $result = mysqli_query($mysqli, "CALL `EVENTS`()");

while($res = mysqli_fetch_array($result)){		
		echo "<tr>";
        echo "<td>".$res['eventid']."</td>";
		echo "<td>".$res['eventname']."</td>";
		echo "<td>".$res['eventlocation']."</td>";
		echo "<td>".$res['eventtime']."</td>";

		 echo"<td bgcolor='grey'> <a href=\"delete.php? eventid=$res[eventid]\" onClick=\"return confirm('Are you sure you want to delete?')\"><font color='black'>Delete</a></td>"; 
	}	
?>
</table>
</body>
</html>
