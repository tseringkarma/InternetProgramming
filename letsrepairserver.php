
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="karmarepairing";


$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("Connection Failed".mysqli_connect());
}
else{
    echo "Connected successfully<br>";
}

//renamin the file to the current time as e.g. 02-03-15-01-13-18pm.jpg
$uploadOk = 1;
    //specifies the directory where the file is going to be placed
    $upload_dir = "uploads/"; 
    $removeExtension = explode('.',basename($_FILES["pic"]["name"]));
    $target_file = $upload_dir.date("m-d-y").date("h-i-sa").".$removeExtension[1]"; 
     
    //specifies the path of the file to be uploaded
    $upload_file = $upload_dir . basename($_FILES["pic"]["name"]); 
     
    //$uploadOk=1 is not used yet (will be used later)
    $uploadOk = 1; 
     
    //$imageFileType holds the file extension of the file
    $imageFileType = pathinfo($upload_file,PATHINFO_EXTENSION); 
     
        // Check if image file is a actual image or fake image(other than image) 
        if(isset($_POST["submit"])) 
        { 
            $check = getimagesize($_FILES["pic"]["tmp_name"]); 
            if($check !== false) 
            { 
                echo "File is an image - " . $check["mime"] . "."; 
                $uploadOk = 1; 
            } 
            else
            { 
                echo "File is not an image."; 
                $uploadOk = 0; 
            } 
        } 
     
        // Check if file already exists 
        if (file_exists($upload_file)) 
        { 
            echo "Sorry, file already exists."; $uploadOk = 0; 
        }
     
        // Check file size 
        if ($_FILES["pic"]["size"] > 500000) 
        {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
         
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
        {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
     
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) 
        {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } 
        else
        {
            if (move_uploaded_file($_FILES["pic"]["tmp_name"], $upload_file))
            {
                echo "The file ". basename( $_FILES["pic"]["name"]). " has been uploaded.";
            } 
            else
            {
            echo "Sorry, there was an error uploading your file.";
            }
        }


if(isset($_POST['submit']))
{
$devicetype=$_POST['devicetype'];
$problem=$_POST['problem'];
$dateofproblemstarted=$_POST['dateofproblemstarted'];
$problemreason=$_POST['problemreason'];
$appointmentschedule=$_POST['appointmentschedule'];


$sql ="INSERT INTO letsrepair (devicetype,problem,image,dateofproblemstarted,problemreason,
                        appointmentschedule) VALUES('$devicetype','$problem','$target_file','$dateofproblemstarted','$problemreason','$appointmentschedule')";



$query=mysqli_query($conn,$sql);


if($query)
{
    echo "Sent data to the database";
    header('location:home.php');
}
else
echo "Error";
}

?>



