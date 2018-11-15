<?php
 
require_once 'propietario_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar_propi':
        $propietario = new Propietario();
		$propietario->editar($datos);
        break;
    case 'nuevo_propi':
        $propietario = new Propietario();
		$propietario->nuevo($datos);
        break;
    case 'borrar_propi':
		$propietario = new Propietario();
		$propietario->borrar($datos['codigo']);
        break;
}
?>
