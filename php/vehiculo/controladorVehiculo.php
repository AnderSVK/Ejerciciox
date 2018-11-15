<?php
 
require_once 'vehiculo_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar_vehi':
        $vehiculo = new Vehiculo();
		$vehiculo->editar($datos);
        break;
    case 'nuevo_vehi':
        $vehiculo = new Vehiculo();
		$vehiculo->nuevo($datos);
        break;
    case 'borrar_vehi':
		$vehiculo = new Vehiculo();
		$vehiculo->borrar($datos['codigo']);
        break;
}
?>
