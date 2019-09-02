
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>signup</title>
</head>
<body>
	<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/*.bg-img {
  /* The image used */
  /*background-image: url("img_nature.jpg");

  min-height: 380px;

   Center and scale the image nicely 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}*//*/*/

/* Add styles to the form container */
.container {
  position: absolute;
  top:68px;
  right: 5px;
  margin: 3px;
  max-width: 700px;
  padding: 18px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 3px;
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


<div class="subdiv">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="galary.php">Galary</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li class="active"><a href="#">Sign Up</a></li>
		<li><a href="login.php">Login</a></li>
	</ul>
</div>



<form action="dbconnect.php" method="POST" class="container">
  <p><a href="login.php" style="margin-left: 435px; text-decoration-color: green;text-decoration: none;">Already a member?login</a></p>
   <!-- <p>Already a member?<a href="login.php">Sign in</a></p>
   <p><a href="admin.php"  style="margin-left: 290px; text-decoration: none; color: green;">Admin?</a></a></p> -->
    <h1>Create a New Account</h1>
    <h5>it's Quick and easy.</h5>

    <label for="name"><b>Fullname</b></label>
    <input type="text" placeholder="Enter Fullname" name="name" required>
  

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>    

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" name="submit" value="submit" class="btn">Sign Up</button>






  
  </form>
</body>
</html>
