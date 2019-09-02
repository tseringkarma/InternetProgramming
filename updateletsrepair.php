<?php
include 'letsrepairdbconnect.php';

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
$name=$_POST['devicetype'];
$address=$_POST['problem'];
// $email=$_POST['image'];
$password=$_POST['dateofproblemstarted'];
$password=$_POST['problemreason'];
$image=$_POST['image'];
$password=$_POST['appointmentschedule'];
}
$sql="UPDATE letsrepair SET devicetype='$devicetype',problem='$problem',image='$image',dateofproblemstarted='$dateofproblemstarted',problemreason='$problemreason',appointmentschedule='$appointmentschedule'WHERE id='$id' ";

$query=mysqli_query($conn,$sql);

if($query){
	header("location:showletsrepair.php");
}
else
{
	die("Error ");
}

?>

</body>
</html>