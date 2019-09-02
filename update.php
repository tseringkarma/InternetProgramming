<?php
include 'dbconnect.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update form</title>
</head>
<body>

<?php

 
if($_SERVER['REQUEST_METHOD']=='POST') {
$id=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];
}
$sql="UPDATE repair SET name='$name',address='$address',email='$email',password='$password' WHERE id='$id' ";

$query=mysqli_query($conn,$sql);

if($query){
	header("location:show.php");
}
else
{
	die("Error ");
}

?>

</body>
</html>