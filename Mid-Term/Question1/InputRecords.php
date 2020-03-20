<?php
include('config.php');
?>

<?php
if (isset($_POST['btn'])){
	echo $_POST['Name']." Your Details are".'<br>';
	$Enrollment= $_POST['Enrollment'];
	$Name= $_POST['Name'];
	$age= $_POST['Age'];
	$course= $_POST['Course'];
	$branch= $_POST['Branch'];
	$contact= $_POST['Contact'];
	$email= $_POST['Email'];

$sql= "INSERT INTO `users2` VALUES ('$Enrollment','$Name','$age', '$course','$branch' ,'$contact','$email')";
$query= mysqli_query($conn,$sql);
header("Location:details.php");
}
else{
	echo "WElcome guest";
}
?>