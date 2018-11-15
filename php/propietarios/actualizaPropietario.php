<?php
	require_once('../php/propietario_modelo.php');
	
    $datos = $_POST;        
	$propietario = new Propietario();
	$propietario->editar($datos);
	
?>