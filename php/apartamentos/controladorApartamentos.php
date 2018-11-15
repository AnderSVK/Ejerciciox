<?php
 
require_once 'apartamento_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar_apar':
        $apartamentos = new Apartamentos();
		$apartamentos->editar($datos);
        break;
    case 'nuevo_apar':
        $apartamentos = new Apartamentos();
		$apartamentos->nuevo($datos);
        break;
    case 'borrar_apar':
		$apartamentos = new Apartamentos();
		$apartamentos->borrar($datos['codigo']);
        break;
}
?>
