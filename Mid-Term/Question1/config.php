<?php
 $hostName = "localhost";
 $Username = "root";
 $Password = "";
 $databaseName = "CSE2020";
     
 $conn = new mysqli($hostName, $Username, $Password, $databaseName);
if($conn){
}	
else{
	echo 'connection_failed!!' + 
	mysqli_connect_error();
}
?>