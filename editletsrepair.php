 <?php
 $servername="localhost";
$username="root";
$password="";
$dbname="karmarepairing";


$conn=mysqli_connect($servername,$username,$password,$dbname);

include "letsrepairdbconnect.php";

 $id=$_GET['id'];
 $sql="SELECT * FROM letsrepair WHERE id='$id'";
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
		<form action="updateletsrepair.php" method="POST">


			<tr>
				<td>Device type:</td>
				<td><input type="text" name="devicetype" value="<?php echo $row['devicetype'];?>"></td>
			</tr>


			<tr>
				<td>Problem:</td>
				<td><input type="text" name="problem" value="<?php echo $row['problem'];?>"></td>
			</tr>

			<!-- <tr>
				<td>Image :</td>
				<td><input type="text" name="image" value="<?php echo $row['image'];?>"></td>
			</tr> -->
			<tr>
				<td>Dateofproblemstarted:</td>
				<td><input type="date" name="dateofproblemstarted" value="<?php echo $row['dateofproblemstarted'];?>"></td>
			</tr>
			<tr>
				<td>Problem Reason:</td>
				<td><input type="text" name="problemreason" value="<?php echo $row['problemreason'];?>"></td>
			</tr>
			<tr>
				<td>Image :</td>
				<td><input type="text" name="image" value="<?php echo $row['image'];?>"></td>
			</tr>
			<tr>
				<td>Appointmentschedule:</td>
				<td><input type="date" name="appointmentschedule" value="<?php echo $row['appointmentschedule'];?>"></td>
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
