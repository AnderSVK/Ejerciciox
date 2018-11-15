<?php
 
require_once 'alquiler_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar_alqui':
        $alquiler = new Alquiler();
		$alquiler->editar($datos);
        break;
    case 'nuevo_alqui':
        $alquiler = new Alquiler();
		$alquiler->nuevo($datos);
        break;
    case 'borrar_alqui':
		$alquiler = new Alquiler();
		$alquiler->borrar($datos['codigo']);
        break;
}
?>
