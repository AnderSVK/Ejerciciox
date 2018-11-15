<?php
 
require_once 'cobro_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar_cobro':
        $cobro = new Cobro();
		$cobro->editar($datos);
        break;
    case 'nuevo_cobro':
        $cobro = new Cobro();
		$cobro->nuevo($datos);
        break;
    case 'borrar_cobro':
		$cobro = new Cobro();
		$cobro->borrar($datos['codigo']);
        break;
}
?>
