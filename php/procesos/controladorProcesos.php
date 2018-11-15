<?php
 
require_once 'proceso_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar_proce':
        $proceso = new Proceso();
		$proceso->editar($datos);
        break;
    case 'nuevo_proce':
        $proceso = new Proceso();
		$proceso->nuevo($datos);
        break;
    case 'borrar_proce':
		$proceso = new Proceso();
		$proceso->borrar($datos['codigo']);
        break;
}
?>
