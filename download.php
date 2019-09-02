<?php

$id = $_GET["id"];
$devicetype = $_GET["devicetype"];
$problem = $_GET["problem"];
$dateofproblemstarted = $_GET["dateofproblemstarted"];
$problemreason = $_GET["problemreason"];
$image=$_GET["image"];
$appointmentschedule=$_GET["appointmentschedule"];



if(isset($_GET["id"]))
{
require 'dompdf-0.5.1/dompdf_config.inc.php';
$obj_dom=new DOMPDF();
    // $pdf_content='demo';
$pdf_content="<table border='1px'><tr><th>ID</th><th>devicetype</th><th>problem</th><th>dateofproblemstarted</th><th>problemreason</th><th>image</th><th>appointmentschedule</th></tr><tr><th>$id</th><th>$devicetype</th><th>$problem</th><th>$dateofproblemstarted</th><th>$problemreason</th><th>$image</th><th>$appointmentschedule</th>";
$obj_dom->load_html($pdf_content);
$obj_dom->render();
$obj_dom->stream('dom_pdf.pdf');
}

?>

<!DOCTYPE html>
<html>
<head>
<title>File Download</title>
</head>
<body>


</body>
</html>
