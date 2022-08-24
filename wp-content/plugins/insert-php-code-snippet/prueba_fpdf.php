<?
if (!class_exists('FPDF')) {
    include MYPLUGINNAME_PATH . 'fpdf/fpdf184/fpdf.php'; 
}
$pdf=new FPDF();
//Primera página
$pdf->AddPage();
$pdf->SetFont('Arial','',15);
$pdf->Cell(40,20);
$pdf->Write(5,'A continuación mostramos una imagen ');
$pdf->Image('leon.jpg' , 80 ,22, 35 , 38,'JPG', 'http://www.cecyteg.edu.mx.com');
$pdf->Output();
?>