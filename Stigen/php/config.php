<!-- technosmarter.com  -->


<?php

$databaseHost = 'localhost';
$databaseName = 'test';
$databaseUsername = 'root';
$databasePassword = '123456789';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
if(! $mysqli ) {
            die('Could not connect: ' . mysqli_error());
         }
?>
