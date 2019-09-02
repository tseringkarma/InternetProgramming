

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Let's Repair</title>
</head>
<body>

<style type="text/css">
body{
margin:0px;
background-image: url(backgroundimg.png);
background-repeat: no-repeat;
background-size: 150%;
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
/*height: 460px;*/
/*width: 1250px;*/
/*background-color: lightblue;*/
/*border-radius: 5px;*/
margin-top:-50px;
/*bottom: 500px;*/
}
.dt{float: left;text-align: left;}
.logo img{
	float: left;
	width: 235px;
	padding: 15px;
	/*height: auto;*/
	
}
</style>

<div>
<ul>
<li><a href="index.php" style="float:right;width: auto;">Log out</a></li>
<!-- <li><a href="home.php" style="float:right;width: auto;">Home</a></li> -->
<li><div class="logo"><img src="karmalogo.png"></div></li>
</ul>

 </div>

<div class="container">
	<center>
<form action="letsrepairserver.php" method="POST" enctype="multipart/form-data">
	<fieldset style="width: 40% ; background-color:lightgreen; margin-top: 1px; border-radius: 25px;">
<!-- 	<legend style="color:white;"> --><b><h2>Let's Repair</h2></b><!-- </legend> -->
<label for="device type">Device Type:</label><br>
<select name="devicetype" id="devicetype">
<option selected="disabled">-----Device Type-----</option>
<option value="mobile">Mobile</option>
<option value="laptop">laptop</option>
<!-- <option value="Desktop">Desktop</option> -->
</select>
<br>

<label for="problems">Problems:</label><br>
<select name="problem" id="problem">
<option selected="disabled">----Problems----</option>
<option value="display replacement">Broken Display</option>
<option value="battery replacement">Battery Problem</option>
<option value="motherboard replair">Motherboard issue</option>
</select>
<br><br>

<label for="date">Date of Problem Started:</label><br>
<input type="date" name="dateofproblemstarted">
<br><br>

<label for="reason">Problem Reason:</label><br>
<textarea id="reason" rows="15" cols="25" name="problemreason"></textarea>
<br><br>

<input type="file" name="pic" id="imgToUpload">
          <br><br>
        

<label for="date">Appointment Schedule:</label><br>
<input type="date" name="appointmentschedule">
<br><br>

<input type="submit" name="submit" value="submit" id="submit"></a>
<input type="reset" name="reset" value="reset">
</fieldset>
</form>
</center>
</div>

</body>
</html>