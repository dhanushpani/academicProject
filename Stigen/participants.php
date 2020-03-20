<html>
<head>	
	<title>event</title>
	<link rel="stylesheet" type="text/css" href="css/event.css">
</head>

<body>
<a href="http://localhost/Stigen/coordinate.htm">back</a><br/><br/>

	<table width='70%'height='10%' border='0'>

	<tr>
                
		<td>PID</td>
        <td>P_NAME</td>
		<td>USN</td>
		<td>EVENT_NAME</td>
		
	</tr>
	<?php

include_once("php/config.php");


 $result = mysqli_query($mysqli, "SELECT p.pid,p.usn,p.name,e.eventname FROM participants p,event e WHERE e.eventid=p.eventid ORDER BY pid");

while($res = mysqli_fetch_array($result)){		
		echo "<tr>";
        echo "<td>".$res['pid']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['usn']."</td>";
		echo "<td>".$res['eventname']."</td>";

		echo"<td bgcolor='grey'><a href=\"pdelete.php?pid=$res[pid]\" onClick=\"return confirm('Are you sure you want to delete?')\"><font color='black'>Delete</a></td>"; 

	
	}	
?>
</table>
</body>
</html>