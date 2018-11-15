<?php
	require_once('../php/zonas_modelo.php');
	
    $datos = $_POST;        
	$zonas = new Zonas();
	$zonas->editar($datos);
	
?>