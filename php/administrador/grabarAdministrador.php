<?php
	require_once('../php/administrador_modelo.php');
		
	$datos = array(
	'admin_codi'=>$_POST['admin_codi'],
	'admin_nomb'=>$_POST['admin_nomb']
	);
	
	$administrador = new Administrador();
	$administrador->nuevo($datos);
	
?>