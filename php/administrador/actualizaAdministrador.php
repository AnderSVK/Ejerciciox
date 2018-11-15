<?php
	require_once('../php/administrador_modelo.php');
	
    $datos = $_POST;        
	$administrador = new Administrador();
	$administrador->editar($datos);
	
?>