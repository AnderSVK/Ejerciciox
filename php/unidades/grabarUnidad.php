<?php
	require_once('../unidades/unidad_modelo.php');
		
	$datos = array(
	'uni_codi'=>$_POST['uni_codi'],
	'uni_nomb'=>$_POST['uni_nomb']
	);
	
	$unidades = new Unidades();
	$unidades->nuevo($datos);
	
?>