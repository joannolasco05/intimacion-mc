
<?php

    require_once('C:\wamp\www\luis\fpdf\fpdf.php');
    //$data ='Hello world';
    $fpdf= new FPDF('P','mm','A4');
    $fpdf->AddPage();
    $fpdf->SetFont('Arial','B',16);
    $fpdf->Cell(40,10,$data);
    $fpdf->Output();
?>
 