<?php
	require_once('../php/ciudad_modelo.php');
		
	$datos = array(
	'ciu_codi'=>$_POST['ciu_codi'],
	'ciu_nomb'=>$_POST['ciu_nomb'],
	'pais_codi'=>$_POST['pais_codi']
	);
	
	$ciudad = new Ciudades();
	$ciudad->nuevo($datos);
	
?>