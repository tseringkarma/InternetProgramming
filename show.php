<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<center>
<table style="border: 2px solid black; border-collapse: collapse;" cellpadding="10" cellspacing="10">
	
<thead>
	<th>ID</th>
	<th>FullName</th>
	<th>Address</th>
	<th>Email</th>
	<th>Password</th>
	<th>Actions</th>
	
</thead>





<?php
include "dbconnect.php";


// $servername="localhost";
// $unername="root";
// $password="";
// $dbname="sunway";
// $conn=mysqli_connect($servername,$unername,$password,$dbname);
$sql="SELECT * FROM repair";
$query=mysqli_query($conn,$sql);
if(mysqli_num_rows($query)>0){
	while ($rows=mysqli_fetch_assoc($query)){
		echo "<tr>";
		echo "<td>".$rows['id']."</td>";
		echo "<td>".$rows['name']."</td>";
		echo "<td>".$rows['address']."</td>";
		echo "<td>".$rows['email']."</td>";
		echo "<td>".$rows['password']."</td>";

		echo '<td><a href="delete.php?id='.$rows['id'].'"><img src="delete.jpg"></a>
		<a href="edit.php?id='.$rows['id'].'"><img src="edit.jpg"></a></td>';
	}
}
echo "</tr>";

?>
</table>
</center>
</body>
</html>

<style type="text/css">
	td{
	border: 2px solid black;
	}
	thead{
		background-color: skyblue;
	}
	th{
		border: 2px solid black;
	}
	img{
		height: 30px;
		width: 30px;
	}
</style>