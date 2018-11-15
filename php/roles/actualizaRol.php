<?php
	require_once('../php/roles_modelo.php');
	
    $datos = $_POST;        
	$rol = new Roles();
	$rol->editar($datos);
	
?>