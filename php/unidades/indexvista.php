<?php
session_start();
if(!isset($_SESSION["usu_nomb"])){
  header("location:../../login.php");
}
//Validacion de Usuario
?>
<?php
	require_once('unidad_modelo.php');
	$unidad = new Unidades();
	$listado = $unidad->lista();
?>

<div class="box-header">
    <i class="ion ion-clipboard"></i>
     <!-- tools box -->
    <div class="pull-right box-tools">
    <td width="200"><a target="_blank" href="registros/vistas/unidades.php" class="btn btn-danger">Exportar a PDF</a></td>
    	<button class="btn btn-info btn-sm btncerrar"  data-toggle="tooltip" title="Ocultar"><i class="fa fa-times"></i></button>

    </div><!-- /. tools -->
                  
</div><!-- /.box-header -->
<div class="box-body">
             
<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Codigo</th>
			<th>Nombre</th>
			<th>Ciudad</th>
			<th>Administrador</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($listado as $fila){ ?>
			<tr>
				<td><?php echo $fila['uni_codi'] ?> </td>
				<td><?php echo utf8_encode($fila['uni_nomb']) ?> </td>
				<td><?php echo utf8_encode($fila['ciu_nomb']) ?> </td>
				<td><?php echo utf8_encode($fila['admin_nomb']) ?> </td> 
			</tr>
	<?php } ?>
	</tbody>

</table>

</div><!-- /.box-body -->  

<!-- Funciones de Lógica de neogcio -->
<script>
    $(document).ready(function(){
    	$("#tabla").DataTable();
    });
</script>