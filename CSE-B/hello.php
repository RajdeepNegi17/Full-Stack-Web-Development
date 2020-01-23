<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'CSEB';

if(mysqli_connect($hostName,$userName,$password,$databaseName)){
	echo 'Connection Successful';
}
else{
	echo 'connection_failed!!' + 
	mysqli_connect_error();
}
?>