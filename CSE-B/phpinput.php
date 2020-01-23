<?php
include('config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Input Form</title>
</head>
<body>
	<form name="form" action="details.php" method="post">
		ID: <input type="text" name="id"  placeholder="Enter ID"><br>
		Name: <input type="text" name="username" placeholder="Enter Name"><br>
		Age: <input type="text" name="age" placeholder="Enter Age"><br>
		Contact: <input type="text" name="contact" placeholder="Enter Contact"><br>
		E-mail: <input type="text" name="email" placeholder="Enter email"><br>
		<input type="submit" name="btn"><br>
	</form>

</body>
</html>