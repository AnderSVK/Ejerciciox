<?php
	require_once('../php/vehiculo_modelo.php');
	
    $datos = $_POST;        
	$vehiculo = new Vehiculo();
	$vehiculo->editar($datos);
	
?>