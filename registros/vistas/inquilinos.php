<?php
require('../fpdf/fpdf.php');
require('../php/conexion.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Image('../recursos/logo.png' , 10 ,8, 15 , 20,'png');
$pdf->Cell(18, 10, '', 0);
$pdf->Cell(150, 10, 'Listado de Inquilinos"', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(50, 10, 'Fecha: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'LISTADO DE INQUILINOS', 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(15, 8, 'Codigo', 0);
$pdf->Cell(80, 8, 'Nombre', 0);
$pdf->Cell(40, 8, 'Edad', 0);
$pdf->Cell(25, 8, 'Sexo', 0);
$pdf->Cell(25, 8, 'Apartamento', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$productos = mysql_query("SELECT inqui_codi, inqui_nomb, inqui_edad, inqui_sexo, p.apar_nomb
			FROM tb_inquilinos as d inner join tb_apartamentos as p
			ON (d.apar_codi = p.apar_codi)");
$item = 0;
while($productos2 = mysql_fetch_array($productos)){
	$pdf->Cell(15, 8, $productos2['inqui_codi'], 0);
	$pdf->Cell(80, 8,$productos2['inqui_nomb'], 0);
	$pdf->Cell(40, 8, $productos2['inqui_edad'], 0);
	$pdf->Cell(25, 8, $productos2['inqui_sexo'], 0);
	$pdf->Cell(25, 8, $productos2['apar_nomb'], 0);
	$pdf->Ln(8);
}
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(114,8,'',0);
$pdf->Output();
?>