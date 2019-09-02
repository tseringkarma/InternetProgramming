<?php


require_once 'dompdf/lib/html5lib/Parser.php';
require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
require_once 'dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();


 
 include 'dbconnect.php';
 include'showletsrepair	.php';
?>

<?php
 $id=$_GET['id'];

 $sql="SELECT * FROM letsrepair WHERE id='$id'";

 $query=mysqli_query($conn,$sql);
 $row=mysqli_fetch_assoc($query);

?>

<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;


$data=' ';
$data.='<h1><center>NEPAL TOUR AND TRAVELS</center></h1>';

$data.='<h2><center>PACKAGE INFO</center></h2>';
$data.='<h3><strong>Name:</strong>&nbsp;'.$row['devicetype'].'</h3>';
$data.='<h3><strong>Email:</strong>&nbsp;'.$row['problem'].'</h3>';
$data.='<h3><strong>Address:</strong>&nbsp;'.$row['dateofproblemstarted'].'</h3>';
$data.='<h3><strong>Contact:</strong>&nbsp;'.$row['problemreason'].'</h3>';
$data.='<h3><strong>Destination:</strong>&nbsp;'.$row['pic'].'</h3>';
$data.='<h3><strong>Days:</strong>&nbsp;'.$row['appointmentschedule'].'</h3>';
$data.='<h3><strong>Person:</strong>&nbsp;'.$row['person'].'</h3>';
$data.='<h3><strong>Price:</strong>&nbsp;'.$row['price'].'</h3>';
$data.='<h3><strong>Reservedate:</strong>&nbsp;'.$row['reservedate'].'</h3>';


$savein = 'pdf_doc/';
    $dompdf = new DOMPDF();
    $dompdf->load_html($data);
    $dompdf->render();
    
    // $canvas = $dompdf->get_canvas();
    // $font = Font_Metrics::get_font("arial", "normal","12px");

    // // the same call as in my previous example
    // $canvas->page_text(540, 773, "Page {PAGE_NUM} of {PAGE_COUNT}",
    //                $font, 6, array(0,0,0));

    $pdf = $dompdf->output();      // gets the PDF as a string

    file_put_contents($savein.str_replace("/","-",'first'), $pdf);    // save the pdf file on server
    unset($html);
    unset($dompdf); 


?>