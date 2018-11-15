<?php
 
require_once 'presupuesto_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar_presu':
        $presupuesto = new Presupuesto();
		$presupuesto->editar($datos);
        break;
    case 'nuevo_presu':
        $presupuesto = new Presupuesto();
		$presupuesto->nuevo($datos);
        break;
    case 'borrar_presu':
		$presupuesto = new Presupuesto();
		$presupuesto->borrar($datos['codigo']);
        break;
}
?>
