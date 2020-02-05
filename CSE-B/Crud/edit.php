<?php 
include('config.php');
?>

<?php 
$id = $_GET['id'];
?>

<?php
	$sql= "SELECT * FROM `users` WHERE id='$id'";
	$result=mysqli_query($conn,$sql);
	$data= $result->fetch_assoc();
	$username = $data['name'];
	$age = $data['age'];
	$contact = $data['contact'];
	$email = $data['email'];
?>

<?php
if(isset($_POST['btn'])){
	$sql = "UPDATE `users` SET name ='$username', age='$age', contact='$contact', email='$email' WHERE id='$id'";
	if(mysqli_query($conn,$sql)){
		echo "Data updated successfully!!!";
	}
	else{
		echo "Updation Failed!!!Try Again";
	}
}
else{
	echo "Please click update button";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Input Form</title>
</head>
<body>
	<form name="form" action="edit.php" method="post">
		Name: <input type="text" name="username" placeholder="Enter Name" value=<?php echo $username;?>><br>
		Age: <input type="text" name="age" placeholder="Enter Age" value=<?php echo $age;?>><br>
		Contact: <input type="text" name="contact" placeholder="Enter Contact" value=<?php echo $contact;?>><br>
		E-mail: <input type="text" name="email" placeholder="Enter email" value=<?php echo $email;?>><br>
		<input type="submit" name="btn" value="Update"><br>
	</form>

</body>
</html>