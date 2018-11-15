<?php
	require_once('../php/vehiculo_modelo.php');
		
	$datos = array(
	'vehi_codi'=>$_POST['vehi_codi'],
	'vehi_nomb'=>$_POST['vehi_nomb'],
	'inqui_codi'=>$_POST['inqui_codi']
	);
	
	$vehiculo = new Vehiculo();
	$vehiculo->nuevo($datos);
	
?>