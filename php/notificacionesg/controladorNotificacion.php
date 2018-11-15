<?php
 
require_once 'notificaciones_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar_notig':
        $notificacion = new Notificaciong();
		$notificacion->editar($datos);
        break;
    case 'nuevo_notig':
        $notificacion = new Notificaciong();
		$notificacion->nuevo($datos);
        break;
    case 'borrar_notig':
		$notificacion = new Notificaciong();
		$notificacion->borrar($datos['codigo']);
        break;
}
?>
