<?php
	require_once('../php/proceso_modelo.php');
	
    $datos = $_POST;        
	$proceso = new Proceso();
	$proceso->editar($datos);
	
?>