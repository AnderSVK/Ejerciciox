<?php
 
require_once 'notificacion_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar_noti':
        $notificacion = new Notificacion();
		$notificacion->editar($datos);
        break;
    case 'nuevo_noti':
        $notificacion = new Notificacion();
		$notificacion->nuevo($datos);
        break;
    case 'borrar_noti':
		$notificacion = new Notificacion();
		$notificacion->borrar($datos['codigo']);
        break;
}
?>
