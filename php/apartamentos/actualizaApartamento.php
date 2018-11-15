<?php
	require_once('../php/apartamento_modelo.php');
	
    $datos = $_POST;        
	$apartamentos = new Apartamentos();
	$apartamentos->editar($datos);
	
?>