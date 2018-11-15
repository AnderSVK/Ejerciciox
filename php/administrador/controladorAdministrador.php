<?php
 
require_once 'administrador_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar_admin':
        $administrador = new Administrador();
		$administrador->editar($datos);
        break;
    case 'nuevo_admin':
        $administrador = new Administrador();
		$administrador->nuevo($datos);
        break;
    case 'borrar_admin':
		$administrador = new Administrador();
		$administrador->borrar($datos['codigo']);
        break;
}
?>
