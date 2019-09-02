<?php
include "mail.php";
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="karmarepairing";

//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);

//check connection
if(!$conn)
{
	die("connection failed".mysqli_connect());
}
echo "connected succesfully !!<br>";


if(isset($_POST['submit']))
{
	$name =$_POST['name'];
	$address =$_POST['address'];
	$email =$_POST['email'];
	$password =$_POST['password'];
   


$sql="INSERT INTO repair(name,address,email,password)VALUES('$name','$address','$email','$password')";


$query=mysqli_query($conn,$sql);
mysqli_select_db($con,'karmarepairing');

$email =$_POST['email'];
$password=$_POST['password'];

$sql= "Select * From repair where email ='$email'";
$query=mysqli_query($conn,$sql);
$num =mysqli_num_rows($query);
// if($num == 1)
// {  
// 	echo "username already taken";
// }
// else
// {
// 	$reg="insert into repair(email,password)VALUES('$email','$password')";
// 	mysqli_query($con,$reg);
// 	echo "registration succesfully";
// }

if($query)
{
	echo "data to be send";
	header('location:letsrepair.php');
}
else
 echo "Errors";

}



?> 
<!-- <

session_start();
$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'karmarepairing');

$email =$_POST['email'];
$password=$_POST['password'];

$s= "Select * From repair where email ='$email' && password ='$password'";
$result=mysqli_query($conn,$s);
$num =mysqli_num_rows($result);
if($num == 1)
{  
	header('location:home.php');
}
else
{
	header('location:login.php');
} -->


