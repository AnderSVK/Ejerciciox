<?php
	require_once('../php/zonas_modelo.php');
		
	$datos = array(
	'zona_codi'=>$_POST['zona_codi'],
	'zona_nomb'=>$_POST['zona_nomb']
	);
	
	$zonas = new Zonas();
	$zonas->nuevo($datos);
	
?>