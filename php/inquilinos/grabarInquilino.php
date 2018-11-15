<?php
	require_once('../php/inquilinos_modelo.php');
		
	$datos = array(
	'inqui_codi'=>$_POST['inqui_codi'],
	'inqui_nomb'=>$_POST['inqui_nomb'],
	'inqui_edad'=>$_POST['inqui_edad'],
	'inqui_sexo'=>$_POST['inqui_sexo']
	'apar_codi'=>$_POST['apar_codi']
	);
	
	$inquilinos = new Inquilinos();
	$inquilinos->nuevo($datos);
	
?>