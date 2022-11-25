<?php


require('fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->Image("certiF.jpg",0,0,210,150);
$pdf->Output();

?>