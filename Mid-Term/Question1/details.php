<?php include('config.php'); ?>

<html>
<head>
<title>Records</title>
</head>
<body>

<?php
$sql = "SELECT * FROM `users2`";
$result = mysqli_query($conn, $sql);

if($result->num_rows > 0){
?>   
<table border="1">
    <thead>
        <tr>
            <th>Enrollment</th>
            <th>Name</th>
            <th>Age</th>
            <th>Course</th>
            <th>Branch</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php    
    while($data = $result->fetch_assoc()){ ?>
    <tr>
        <td><?php echo $data['Enrollment'];?></td>
        <td><?php echo $data['Name']; ?></td>
        <td><?php echo $data['Age']; ?></td>
        <td><?php echo $data['Course']; ?></td>
        <td><?php echo $data['Branch']; ?></td>
        <td><?php echo $data['Contact']; ?></td>
        <td><?php echo $data['Email']; ?></td>
        <td> <a href="edit.php?Enrollment=<?php echo $data['Enrollment'];?>">Edit</a></td>
        <td> <a href="delete.php?Enrollment=<?php echo $data['Enrollment'];?>">Delete</a></td>
    </tr>
    <?php } ?>
    </tbody>
    
<?php } ?>
</table>   
</body>   
</html>