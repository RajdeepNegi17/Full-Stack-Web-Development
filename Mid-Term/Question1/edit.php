<?php 
include('config.php');
?>

<?php 
$Enrollment=$_GET['Enrollment'];
?>

<?php
	$sql= "SELECT * FROM `users2` WHERE Enrollment='$Enrollment'";
	$result=mysqli_query($conn,$sql);
	$data= $result->fetch_assoc();
	$Name = $data['Name'];
	$age = $data['Age'];
	$course = $data['Course'];
	$branch = $data['Branch'];
	$contact = $data['Contact'];
	$email = $data['Email'];
?>

<?php
if(isset($_POST['btn'])){
	$Enrollment= $_POST['Enrollment'];
	$Name= $_POST['Name'];
	$age= $_POST['Age'];
	$course= $_POST['Course'];
	$branch= $_POST['Branch'];
	$contact= $_POST['Contact'];
	$email= $_POST['Email'];
	$sql = "UPDATE `users2` SET Name ='$Name', Age='$age', Course='$course', Branch='$branch', Contact='$contact', Email='$email' WHERE Enrollment='$Enrollment'";
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


<html>
	<head>
	<title>Input Form</title>
	</head>
	<body>
	<form name="form" action="edit.php" method="post">
		Name: <input type="text" name="username" placeholder="Enter Name" value="<?php echo $Name; ?>"><br>
		Age: <input type="text" name="age" placeholder="Enter Age" value="<?php echo $age; ?>"><br>
		Course: <input type="text" name="course" placeholder="Enter Course" value="<?php echo $course; ?>"><br>
		Branch: <input type="text" name="branch" placeholder="Enter Branch" value="<?php echo $branch; ?>"><br>
		Contact: <input type="text" name="contact" placeholder="Enter Contact" value="<?php echo $contact; ?>"><br>
		E-mail: <input type="text" name="email" placeholder="Enter email" value="<?php echo $email; ?>"><br>
		<input type="submit" name="btn" value="Update"><br>
	</form>

</body>
</html>