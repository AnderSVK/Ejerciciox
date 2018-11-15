<?php
 
require_once 'zonas_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar_zonas':
        $zonas = new Zonas();
		$zonas->editar($datos);
        break;
    case 'nuevo_zona':
        $zonas = new Zonas();
		$zonas->nuevo($datos);
        break;
    case 'borrar_zona':
		$zonas = new Zonas();
		$zonas->borrar($datos['codigo']);
        break;
}
?>
