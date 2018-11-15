<?php
 
require_once 'inquilino_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar_inqui':
        $inquilinos = new Inquilinos();
		$inquilinos->editar($datos);
        break;
    case 'nuevo_inqui':
        $inquilinos = new Inquilinos();
		$inquilinos->nuevo($datos);
        break;
    case 'borrar_inqui':
		$inquilinos = new Inquilinos();
		$inquilinos->borrar($datos['codigo']);
        break;
}
?>
