<?php
 
require_once 'pais_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar_pais':
        $pais = new Pais();
		$pais->editar($datos);
        break;
    case 'nuevo_pais':
        $pais = new Pais();
		$pais->nuevo($datos);
        break;
    case 'borrar_pais':
		$pais = new Pais();
		$pais->borrar($datos['codigo']);
        break;
}
?>
