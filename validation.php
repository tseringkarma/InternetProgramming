<?php

session_start();
$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'karmarepairing');

$email =$_POST['email'];
$password=$_POST['password'];

$s= "Select * From repair where email ='$email' && password ='$password'";
$query=mysqli_query($conn,$s);
$num =mysqli_num_rows($query);
if($num == 1)
{  
	header('location:home.php');
}
else
{
	header('location:login.php');
}
?>