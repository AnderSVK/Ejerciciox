<?php
require('../fpdf/fpdf.php');
require('../php/conexion.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Image('../recursos/logo.png' , 10 ,8, 15 , 20,'png');
$pdf->Cell(18, 10, '', 0);
$pdf->Cell(150, 10, 'Listado de Apartamentos"', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(50, 10, 'Fecha: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'LISTADO DE APARTAMENTOS', 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(15, 8, 'Codigo', 0);
$pdf->Cell(80, 8, 'Nombre', 0);
$pdf->Cell(40, 8, 'Propietario', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$productos = mysql_query("SELECT apar_codi, apar_nomb, p.propi_nomb
			FROM tb_apartamentos as d inner join tb_propietarios as p
			 ON (d.propi_codi = p.propi_codi)");

while($productos2 = mysql_fetch_array($productos)){
	$pdf->Cell(15, 8, $productos2['apar_codi'], 0);
	$pdf->Cell(80, 8,$productos2['apar_nomb'], 0);
	$pdf->Cell(40, 8, $productos2['propi_nomb'] , 0);
	$pdf->Ln(8);
}
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(114,8,'',0);
$pdf->Output();
?>