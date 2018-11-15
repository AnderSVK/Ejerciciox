<?php
 
require_once 'unidad_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar_uni':
        $unidad = new Unidades();
		$unidad->editar($datos);
        break;
    case 'nuevo_uni':
        $unidad = new Unidades();
		$unidad->nuevo($datos);
        break;
    case 'borrar_uni':
		$unidad = new Unidades();
		$unidad->borrar($datos['codigo']);
        break;
}
?>
