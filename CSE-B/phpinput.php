<?php 
	echo 'Welcome'.$_GET['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Form</title>
</head>
<body>
	<form name="form" action="phpinput.php" method="get">
		Name: <input type="text" name="username"><br>
		<input type="submit" name="btn">
	</form>

</body>
</html>