<?php
if($_POST)
{
$servername = "localhost";
$username = "root";
$password = "";
$db="karmarepairing";
$error="";
$user=$_POST['email'];
$pass=$_POST['password'];
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

$query="SELECT * FROM admin WHERE email='$user' and password='$pass'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1)
{
  session_start();
  $_SESSION['admin']='true';
  header('location:search.php');
  // header('location:show.php');
}else
{ $error= "wrong username or password"; }
}
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>index</title>
</head>
<body>


<div class="subdiv">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="galary.php">Galary</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="signup.php">Sign Up</a></li>
		<li class="active"><a href="#">Login</a></li>
	</ul>
</div>
</body>
</html>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("img_nature.jpg");

  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  top: 38px;
  right: 380px;
  margin: 20px;
  max-width: 400px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
   border-radius:3px;	
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<br>
<br>
<br>
<div class="bg-img">
  <form action="./admin.php" method="POST" class="container">
    <h1>Admin Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <span style="color: red;margin-left:100px;"><?php if(isset($error)){echo $error; }?></span>
        <br>

    <button type="submit" class="btn">Login</button>
  </form>
</div>
</body>
</html>