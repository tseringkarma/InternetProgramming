 <?php
 include "dbconnect.php";

 $id=$_GET['id'];
 $sql="SELECT * FROM repair WHERE id='$id'";
 $query=mysqli_query($conn,$sql);
 $row=mysqli_fetch_assoc($query);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
</head>
<body>
	<center>
<fieldset style="width: 40%;background-color: gray" >
	<h3>Update Form</h3>
	<table cellspacing="5" cellpadding="4">
		<form action="update.php" method="POST">


			<tr>
				<td>FullName :</td>
				<td><input type="text" name="name" value="<?php echo $row['name'];?>"></td>
			</tr>


			<tr>
				<td>Address :</td>
				<td><input type="text" name="address" value="<?php echo $row['address'];?>"></td>
			</tr>

			<tr>
				<td>Email :</td>
				<td><input type="text" name="email" value="<?php echo $row['email'];?>"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" value="<?php echo $row['password'];?>"></td>
			</tr>

				<tr>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
				<input type="hidden" name="id" value="<?php echo $row['id'];?>">

		</form>
	</table>

	

</fieldset>
</center>
</body>
</html>

