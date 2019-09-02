<!DOCTYPE html>
<html>
<head>
<title>Search</title>
</head>

<style type="text/css">
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
width: 1200px;
background-color: lightblue;
border-radius: 5px;
margin-top:25px;
}
.dt{float: left;text-align: left;}
.logo img{
	float: left;
	width: 235px;
	padding: 15px;
	/*height: auto;*/
	
}
</style>



<body>
<div>
<ul>
<li><a href="index.php" style="float:right;width: auto;">Log out</a></li>
<li><a href="showletsrepair.php" style="float:right;width: auto;">Show</a></li>
<li><div class="logo"><img src="karmalogo.png"></div></li>
</ul>

 </div>

<center>

<div class="container">

<form method="POST" action="search.php">
<h2 style="margin-top: 20px">Customer's Details</h2>
<input type="text" name="key" style="height: 23px; border-radius: 5px;border:2px solid gray;width: 200px">
<input type="submit" value="Search" name="search" style="border:2px solid gray;border-radius: 5px; width: 80px;height: 30px;font-weight: bold;">

<input type="submit" value="Show data" name="search" style="border:2px solid gray;border-radius: 5px; width: 100px;height: 30px;font-weight: bold;">

<br><br>
<table border="2px"style="border-collapse: collapse;" cellpadding="20" >
<thead style="background-color: black;color: white;height: 30px;width:90px">
<th>ID</th>
<th>devicetype</th>
<th>problem</th>
<th>dateofproblemstarted</th>
<th>problemreason</th>
<th>image</th>
<th>appointemnetschedule</th>
<th>Download</th>
</thead>

<?php
// include "letsrepairdbconnect.php";
$servername="localhost";
$username="root";
$password="";
$dbname="karmarepairing";

//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['search'])){
searching();
}

function searching(){
global $conn;

$q_string = $_POST['key'];
// echo $q_string;

$sql="SELECT * FROM letsrepair where concat(id,devicetype,problem,dateofproblemstarted,problemreason,image,appointmentschedule) like '%$q_string%'";
$query=mysqli_query($conn,$sql);


if(mysqli_num_rows($query)>0)
{
while ($rows=mysqli_fetch_assoc($query)) {
		echo '<tr>';
		echo '<td>'.$rows['id'].'</td>';
		echo '<td>'.$rows['devicetype'].'</td>';
		echo '<td>'.$rows['problem'].'</td>';
		echo '<td>'.$rows['dateofproblemstarted'].'</td>';
		echo '<td>'.$rows['problemreason'].'</td>';
		echo '<td>'.$rows['image'].'</td>';
		echo '<td>'.$rows['appointmentschedule'].'</td>';
		

}
}
}
?>



</table>
</form>
</div>

</center>

</body>
</html>
<!-- $conn=mysqli_connect($servername,$username,$password,$dbname);


if(isset($_POST['search'])){
	searching();
}

function searching(){
global $conn;

$q_string = $_POST['key'];
// echo $q_string;

	$sql="SELECT * FROM rio where concat(id,name,email,address,contact,destination,days,person,price,reservedate) like '%$q_string%'";
	$query=mysqli_query($conn,$sql);

	if(mysqli_num_rows($query)>0)
		{
			while ($rows=mysqli_fetch_assoc($query)) {
				echo '<tr>';
				echo '<td>'.$rows['id'].'</td>';
				echo '<td>'.$rows['name'].'</td>';	
				echo '<td>'.$rows['email'].'</td>';
				echo '<td>'.$rows['address'].'</td>';
				echo '<td>'.$rows['contact'].'</td>';
				echo '<td>'.$rows['destination'].'</td>';
				echo '<td>'.$rows['days'].'</td>';
				echo '<td>'.$rows['person'].'</td>';
				echo '<td>'.$rows['price'].'</td>';
				echo '<td>'.$rows['reservedate'].'</td>';
				echo '</tr>';
			}
		}
} -->

<!-- ?> -->