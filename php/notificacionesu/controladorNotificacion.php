<?php
 
require_once 'notificaciones_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar_notiu':
        $notificacionu = new Notificacionu();
		$notificacionu->editar($datos);
        break;
    case 'nuevo_notiu':
        $notificacionu = new Notificacionu();
		$notificacionu->nuevo($datos);
        break;
    case 'borrar_notiu':
		$notificacionu = new Notificacionu();
		$notificacionu->borrar($datos['codigo']);
        break;
}
?>
