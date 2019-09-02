
<?php
include "signup.php";
$msg = "Name: ".$_POST['name']."\n";
$msg = "Address: ".$_POST['address']."\n";
$msg.= "E-mail: ".$_POST['email']."\n";
$msg.= "Password: ".$_POST['password']."\n";

//set up the mail
$recipient = "tseringkarma1910@gmail.com";
$subject = "From Submission Results";
$mailheaders = "From: My website <tseringkarma1910@gmail.com> \n";
$mailheaders.= "Reply-To: ".$_POST['email'];

//send mail

if(mail($recipient, $subject, $msg, $mailheaders));
else die('Mail not send');

?>