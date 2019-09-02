<?php
$servername="localhost";
$username="root";
$password="";
$dbname="karmarepairing";

//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);

//check connection
// if(!$conn)
// {
// 	die("connection failed".mysqli_connect());
// }
// echo "connected succesfully !!<br>";
?>


<?php
if(isset($_POST['submit']))
{
	$devicetype =$_POST['devicetype'];
	$problem =$_POST['problem'];
	$dateofproblemstarted =$_POST['dateofproblemstarted'];
	$problemreason=$_POST['problemreason'];
	$appointmentschedule=$_POST['appointmentschedule'];  


// $sql ="INSERT INTO letsrepair (devicetype,problem,dateofproblemstarted,problemreason,image,
//                         appointmentschedule) VALUES('$devicetype','$problem','$target_file','$dateofproblemstarted','$problemreason','$appointmentschedule')";

$query=mysqli_query($conn,$sql);

if($query)
{
	echo "data to be send";
}
else
 echo "Errors";

}
?>

 
    

