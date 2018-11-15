<?php
	require_once('../php/proceso_modelo.php');
		
	$datos = array(
	'proce_codi'=>$_POST['proce_codi'],
	'proce_nomb'=>$_POST['proce_nomb']
	);
	
	$proceso = new Proceso();
	$proceso->nuevo($datos);
	
?>