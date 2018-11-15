<?php
	require_once('../php/ciudad_modelo.php');
	
    $datos = $_POST;        
	$ciudad = new Ciudades();
	$ciudad->editar($datos);
	
?>