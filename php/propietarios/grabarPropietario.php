<?php
	require_once('../php/propietario_modelo.php');
		
	$datos = array(
	'propi_codi'=>$_POST['propi_codi'],
	'propi_nomb'=>$_POST['propi_nomb']
	);
	
	$propietario = new Propietario();
	$propietario->nuevo($datos);
	
?>