<?php
	require_once('../php/registro_modelo.php');
	
    $datos = $_POST;        
	$registro = new Registro();
	$registro->editar($datos);
	
?>