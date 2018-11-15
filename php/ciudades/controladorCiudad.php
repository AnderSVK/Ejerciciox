<?php
 
require_once 'ciudad_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar_ciu':
        $ciudad = new Ciudades();
		$ciudad->editar($datos);
        break;
    case 'nuevo_ciu':
        $ciudad = new Ciudades();
		$ciudad->nuevo($datos);
        break;
    case 'borrar_ciu':
		$ciudad = new Ciudades();
		$ciudad->borrar($datos['codigo']);
        break;
}
?>
