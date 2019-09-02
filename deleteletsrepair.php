
<?php

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="karmarepairing";

$conn=mysqli_connect($servername,$username,$password,$dbname);

$id=$_GET['id'];

$sql="DELETE FROM letsrepair WHERE id='$id'";
$query=mysqli_query($conn,$sql);

if($query)
{
	header("location:showletsrepair.php");
}
else
{
	die("Errors");
}

// $sql="SELECT * FROM letsrepair";
// $query=mysqli_query($conn,$sql);
// if(mysqli_num_rows($query)>0){
// 	while ($rows=mysqli_fetch_assoc($query)){
// 		echo "<tr>";
// 		// echo "<td>".$rows['id']."</td>";
// 		echo "<td>".$rows['devicetype']."</td>";
// 		echo "<td>".$rows['problem']."</td>";
// 		echo "<td>".$rows['dateofproblemstarted']."</td>";
// 		echo "<td>".$rows['problemreason']."</td>";
// 		echo "<td>".$rows['image']."</td>";
// 		echo "<td>".$rows['appointmentschedule']."</td>";
// 		echo '<td><a href="delete.php?id='.$rows['id'].'"><img src="delete.jpg"></a>
// 		<a href="edit.php?id='.$rows['id'].'"><img src="edit.jpg"></a></td>';
// 		echo '<td> <a href="deleteletsrepair.php?id='.$rows['id'].'">Delete</a>
// 		<a href="editletsrepair.php?id='.$rows['id'].'">Edit</a></td>';
// 	}
// }
// echo "</tr>";


?>



<!-- <!DOCTYPE html>
<html>
<head>
	<title>delete form </title>
</head>
<body> -->


<!-- 
// include "letsrepairdbconnect.php";

$id=$_GET['id'];

$sql="DELETE FROM letsrepair WHERE id='$id'";
$query=mysqli_query($conn,$sql);

if($query)
{
	header("location:showletsrepair.php");
} -->



<!-- </body>
</html>
 -->



