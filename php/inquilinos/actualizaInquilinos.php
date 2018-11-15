<?php
	require_once('../php/inquilino_modelo.php');
	
    $datos = $_POST;        
	$inquilinos = new Inquilinos();
	$inquilinos->editar($datos);
	
?>