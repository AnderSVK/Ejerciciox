<?php
	require_once('../php/apartamento_modelo.php');
		
	$datos = array(
	'apar_codi'=>$_POST['apar_codi'],
	'apar_nomb'=>$_POST['apar_nomb'],
	'propi_codi'=>$_POST['propi_codi']
	);
	
	$apartamento = new Apartamentos();
	$apartamento->nuevo($datos);
	
?>