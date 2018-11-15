<?php
	require_once('../php/inquilino_modelo.php');
	$codigo = $_POST['codigo'];
	$inquilinos = new inquilinos();
	$inquilinos->borrar($codigo);
?>