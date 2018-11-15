<?php
	require_once('../php/cobro_modelo.php');
		
	$datos = array(
	'cobro_codi'=>$_POST['cobro_codi'],
	'cobro_nomb'=>$_POST['cobro_nomb'],
	'uni_codi'=>$_POST['uni_codi']
	);
	
	$cobros = new Cobro();
	$cobros->nuevo($datos);
	
?>