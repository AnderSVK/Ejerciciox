<?php
session_start();
if(!isset($_SESSION["usu_nomb"])){
  header("location:../../login.php");
}
//Validacion de Usuario
?>
<?php
	require_once('apartamento_modelo.php');
	$apartamentos = new Apartamentos();
	$listado = $apartamentos->lista();
?>

<div class="box-header">
    <i class="ion ion-clipboard"></i>
     <!-- tools box -->
    <div class="pull-right box-tools">
    	<button class="btn btn-info btn-sm" id="nuevo_apar"  data-toggle="tooltip" title="Nuevo Apartamento"><i class="fa fa-plus" aria-hidden="true"></i></button> 
    	<td width="200"><a target="_blank" href="registros/vistas/apartamentos.php" class="btn btn-danger">Exportar a PDF</a></td>
    	<button class="btn btn-info btn-sm btncerrar"  data-toggle="tooltip" title="Ocultar"><i class="fa fa-times"></i></button>

    </div><!-- /. tools -->
                  
</div><!-- /.box-header -->
<div class="box-body">
             
<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Codigo</th>
			<th>Nombre</th>
			<th>Propietario</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($listado as $fila){ ?>
			<tr>
				<td><?php echo $fila['apar_codi'] ?> </td>
				<td><?php echo utf8_encode($fila['apar_nomb']) ?> </td>
				<td><?php echo utf8_encode($fila['propi_nomb']) ?> </td> 
				<td align='center'> 
				<a class="btn btn-danger borrar_apar" href="#" data-toggle="tooltip" codigo="<?php echo  $fila['apar_codi'] ?>">
  					<i class="fa fa-trash-o"  aria-hidden="true"></i>
  					<span class="sr-only">Delete</span>
				</a> </td> 
				<td align='center'>
				<a class="btn btn-primary editar_apar" href="#" data-toggle="tooltip" codigo="<?php echo $fila['apar_codi'] ?>">
  					<i class="fa fa-pencil"  aria-hidden="false"></i>
  					<span class="sr-only">Edit</span>
				</a> </td> 
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