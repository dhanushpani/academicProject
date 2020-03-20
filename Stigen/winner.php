<html>
<head>	
	<title>event</title>
	<link rel="stylesheet" type="text/css" href="css/event.css">
</head>

<body>
<a href="phome.htm">back</a><br/><br/>

	<table width='70%'height='10%' border='0'>

	<tr>
                
		<td>NAME</td>
		<td>EVENT-NAME</td>
		<td>POSITION</td>
		
	</tr>
<?php

include_once("php/config.php");


 $result = mysqli_query($mysqli, "SELECT name,eventname,position FROM winner,event WHERE eventid=eid");

while($res = mysqli_fetch_array($result)){		
		echo "<tr>";
        echo "<td>".$res['name']."</td>";
		echo "<td>".$res['eventname']."</td>";
		echo "<td>".$res['position']."</td>";
	}	
?>
</table>
</body>
</html>