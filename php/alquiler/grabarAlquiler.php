<?php
	require_once('../alquiler/alquiler_modelo.php');
		
	$datos = array(
	'alquizona_codi'=>$_POST['alquizona_codi'],
	'zona_codi'=>$_POST['zona_codi']
	'inqui_codi'=>$_POST['inqui_codi']
	);
	
	$alquiler = new Alquiler();
	$alquiler->nuevo($datos);
	
?>