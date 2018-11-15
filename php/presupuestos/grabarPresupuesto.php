<?php
	require_once('../php/presupuesto_modelo.php');
		
	$datos = array(
	'presu_codi'=>$_POST['presu_codi'],
	'presu_nomb'=>$_POST['presu_nomb'],
	'uni_codi'=>$_POST['uni_codi']
	);
	
	$presupuesto = new Presupuesto();
	$presupuesto->nuevo($datos);
	
?>