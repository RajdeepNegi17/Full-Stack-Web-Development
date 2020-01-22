<?php
include('config.php');
?>

<?php 
if (isset($_POST['btn'])){
	echo "Dear, ".$_POST['username']."Your Details are".'<br>';
	echo $_POST['id'].'<br>';
	echo $_POST['username'].'<br>';
	echo $_POST['age'].'<br>';
	echo $_POST['contact'].'<br>';
	echo $_POST['email'];
}
else{
	echo "WElcome guest";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Form</title>
</head>
<body>
	<form name="form" action="phpinput.php" method="post">
		ID: <input type="text" name="id"  placeholder="Enter ID"><br>
		Name: <input type="text" name="username" placeholder="Enter Name"><br>
		Age: <input type="text" name="age" placeholder="Enter Age"><br>
		Contact: <input type="text" name="contact" placeholder="Enter Contact"><br>
		E-mail: <input type="text" name="email" placeholder="Enter email"><br>
		<input type="submit" name="btn"><br>
	</form>

</body>
</html>