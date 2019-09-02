<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<div>
<ul>
<li><a href="index.php" style="float:right;width: auto; padding:25px;">Sign Out</a></li>
<li><a href="search.php" style="float:right;width: auto; padding:25px;">Back</a></li>
<li><div class="logo"><img src="karmalogo.png"></div></li>
</ul>

 </div>
<div class="container">


<center>
	
<table style="border: 2px solid black; border-collapse: collapse;" cellpadding="10" cellspacing="10">
	
 
<br>
<h1>Welcome Boss,Here's the Detail info of Customer</h1>

<h3>Let's Repair</h3>
<thead>
	
	<th>devicetype</th>
	<th>problem</th>
	<th>dateofproblemstarted</th>
	<th>problemreason</th>
	<th>pic</th>
	<th>appointmentschedule</th>
	<th> Action	s</th>
	
</thead>
<?php

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="karmarepairing";

$conn=mysqli_connect($servername,$username,$password,$dbname);
$sql="SELECT * FROM letsrepair";
$query=mysqli_query($conn,$sql);
if(mysqli_num_rows($query)>0){
	while ($rows=mysqli_fetch_assoc($query)){
		echo "<tr>";
		// echo "<td>".$rows['id']."</td>";
		echo "<td>".$rows['devicetype']."</td>";
		echo "<td>".$rows['problem']."</td>";
		echo "<td>".$rows['dateofproblemstarted']."</td>";
		echo "<td>".$rows['problemreason']."</td>";
		echo "<td>".$rows['image']."</td>";
		echo "<td>".$rows['appointmentschedule']."</td>";
		echo '<td><a href="deleteletsrepair.php?id='.$rows['id'].'"><img src="delete.jpg"></a>
		<a href="editletsrepair.php?id='.$rows['id'].'"><img src="edit.jpg"></a><a href="pdf.php"?id='.$rows['id'].' "><img src="pdf.png"></a></td>';
	
	}
}
echo "</tr>";
// if(mysqli_num_rows($query)>0){
// 	while ($rows=mysqli_fetch_assoc($query)){
// 		echo "<tr>";
// 		echo "<td>".$rows['devicetype']."</td>";
// 		echo "<td>".$rows['problem']."</td>";
// 		echo "<td>".$rows['dateofproblemstarted']."</td>";
// 		echo "<td>".$rows['problemreason']."</td>";
// 		echo "<td>".$rows['pic']."</td>";
// 		echo "<td>".$rows['appointmentschedule']."</td>";
// 		echo '<td><a href="delete.php?id='.$rows['id'].'">Delete</a>
// 		<a href="edit.php?id='.$rows['id'].'">Edit</a></td>';
// 	}
// }
// echo "</tr>";

?>


</table>
</div>
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
	body{
margin:0px;
background-image: url(backgroundimg.png);
background-repeat: no-repeat;
background-size: 120%;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}
li a {
display: block;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 25px;
}
li a:hover {
background-color: #111;
}
li i{
font-size: 30px;
color:white;
padding-top: 30px;
}

.container{
height: 450px;
width: 1300px;
background-color: lightblue;
border-radius: 5px;
margin-top:35px;
}
.dt{float: left;text-align: left;}
.logo img{
	float: left;
	width: 235px;
	padding: 35px;
	/*height: auto;*/
	
}
</style>
