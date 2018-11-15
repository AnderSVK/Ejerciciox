<?php
	require_once('../php/presupuesto_modelo.php');
	
    $datos = $_POST;        
	$presupuesto = new Presupuesto();
	$presupuesto->editar($datos);
	
?>