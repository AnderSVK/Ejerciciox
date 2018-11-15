<?php
	require_once('../php/roles_modelo.php');
		
	$datos = array(
	'rol_codi'=>$_POST['rol_codi'],
	'rol_nomb'=>$_POST['rol_nomb'],
	'rol_desc'=>$_POST['rol_desc']
	);
	
	$roles = new Roles();
	$roles->nuevo($datos);
	
?>