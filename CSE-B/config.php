<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'cseb';

if(mysqli_connect($hostName,$userName,$password,$databaseName)){
	echo 'Connection Successful';
}
else{
	echo 'connection_failed!!' + 
	mysqli_connect_error();
}
?>