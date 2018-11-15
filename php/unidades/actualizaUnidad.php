<?php
	require_once('../unidades/unidad_modelo.php');
	
    $datos = $_POST;        
	$unidad = new Unidades();
	$unidad->editar($datos);
	
?>