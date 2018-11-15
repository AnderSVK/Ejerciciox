<?php
	require_once('../php/cobro_modelo.php');
	
    $datos = $_POST;        
	$cobro = new Cobro();
	$cobro->editar($datos);
	
?>