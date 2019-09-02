<?php
include ("dbconnect.php");
?>
<?php
if(isset($_POST['submit']))
{
	$name =$_POST['name'];
	$problem =$_POST['problem'];
	$address =$_POST['address'];
	$email =$_POST['email'];
	$password =$_POST['password'];

// $to = "someone@example.com";
// $subject = "Contact mail";
// $from=$_POST["email"];
// $msg=$_POST["msg"];
// $headers = "From: $from";

// mail($to,$subject,$msg,$headers);
// echo "Email successfully sent.";
}
   


$sql="INSERT INTO repair(name,problem,address,email,password)VALUES('$name','$problem','$address','$email','$password')";


$query=mysqli_query($conn,$sql);

if($query)
{
	echo "data to be send";
	
}
else
 echo "Errors";

}
?>
