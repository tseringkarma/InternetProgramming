<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>galary</title>
</head>
<body>


<div class="subdiv">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li class="active"><a href="#">Galary</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="signup.php">Sign Up</a></li>
		<li><a href="login.php">Login</a></li>
	</ul>
</div>


<style type="text/css">
		div.gallery{
float: left;
margin: 10px;
border: 5px solid green;
width: 200px;
height: 220px;
overflow: none;
color: white;
}

div.gallery:hover{
border: 5px solid white;

}

div.gallery img{
width: 100%;
height: 85%;

}

div.desc{
padding: 15px;
/*text-align: center;*/

}

@media screen(max-width: 617px){
.column.side,.column.middle{
width: 100%;
}

p{
text-align: justify;
}

	</style>


	<br>
	<br>
		<br>
	<br>
<div class="gallery">
<!-- <a href="pic/1.jpg" target="_blank"> -->
<img src="karmacard.jpg" alt="abc">
<!-- </a> -->
<div class="desc">Business Card </div>
</div>



<div class="gallery">
<!-- <a href="pic/3.jpg" target="_blank"> -->
<img src="ipodtouch.jpg" alt="abc">
<!-- </a> -->
<div class="desc">Ipod touch Battery Replacement</div>
</div>

<div class="gallery">
<!-- <a href="pic/5.jpg" target="_blank"> -->
<img src="macbookpro.jpg" alt="abc">
<!-- </a> -->
<div class="desc">Macbook Battery replacement</div>
 </div>


<div class="gallery">
<img src="yo.jpg" alt="abc">
<div class="desc">Woking Area</div>
</div>

<div class="gallery">
<img src="mo.jpg" alt="abc">
<div class="desc">Logo of Karma Reparing System</div>
</div>

<div class="gallery">
<img src="tsering.jpg" alt="abc">
<div class="desc">Business Card</div>
</div>

<div class="gallery">
<img src="karmatsering.jpg" alt="abc">
<div class="desc">Background image</div>
</div>
</div>
</body>
</html>


