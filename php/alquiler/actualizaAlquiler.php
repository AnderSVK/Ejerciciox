<?php
	require_once('../alquiler/alquiler_modelo.php');
	
    $datos = $_POST;        
	$alquiler = new Alquiler();
	$alquiler->editar($datos);
	
?>