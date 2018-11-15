<?php
	require_once('../php/registro_modelo.php');
		
	$datos = array(
	'regis_codi'=>$_POST['regis_codi'],
	'vehi_codi'=>$_POST['vehi_codi'],
	'ingre_hora'=>$_POST['ingre_hora'],
	'sali_hora'=>$_POST['sali_hora']
	);
	
	$registro = new Registro();
	$registro->nuevo($datos);
	
?>