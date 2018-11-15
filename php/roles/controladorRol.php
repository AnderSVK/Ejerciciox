<?php
 
require_once 'roles_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar_rol':
        $rol = new Roles();
		$rol->editar($datos);
        break;
    case 'nuevo_rol':
        $rol = new Roles();
		$rol->nuevo($datos);
        break;
    case 'borrar_rol':
		$rol = new Roles();
		$rol->borrar($datos['codigo']);
        break;
}
?>
