<?php
	require_once('../php/pais_modelo.php');
		
	$datos = array(
	'pais_codi'=>$_POST['pais_codi'],
	'pais_nomb'=>$_POST['pais_nomb']
	);
	
	$paises = new Pais();
	$paises->nuevo($datos);
	
?>