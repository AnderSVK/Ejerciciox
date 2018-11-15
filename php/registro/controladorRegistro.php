<?php
 
require_once 'registro_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar_regis':
        $registro = new Registro();
		$registro->editar($datos);
        break;
    case 'nuevo_regis':
        $registro = new Registro();
		$registro->nuevo($datos);
        break;
    case 'borrar_regis':
		$registro = new Registro();
		$registro->borrar($datos['codigo']);
        break;
}
?>
