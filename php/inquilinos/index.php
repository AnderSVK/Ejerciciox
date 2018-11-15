<?php
session_start();
if(!isset($_SESSION["usu_nomb"])){
  header("location:../../login.php");
}
//Validacion de Usuario
?>
<?php
	require_once('inquilino_modelo.php');
	$inquilinos = new Inquilinos();
	$listado = $inquilinos->lista();
?>

<div class="box-header">
    <i class="ion ion-clipboard"></i>
     <!-- tools box -->
    <div class="pull-right box-tools">
    	<button class="btn btn-info btn-sm" id="nuevo_inqui"  data-toggle="tooltip" title="Nuevo Inquilino"><i class="fa fa-plus" aria-hidden="true"></i></button> }
    	<td width="200"><a target="_blank" href="registros/vistas/inquilinos.php" class="btn btn-danger">Exportar a PDF</a></td>
    	<button class="btn btn-info btn-sm btncerrar"  data-toggle="tooltip" title="Ocultar"><i class="fa fa-times"></i></button>

    </div><!-- /. tools -->
                  
</div><!-- /.box-header -->
<div class="box-body">
             
<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Codigo</th>
			<th>Nombre</th>
			<th>Edad</th>
			<th>Sexo</th>
			<th>Apartamento</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($listado as $fila){ ?>
			<tr>
				<td><?php echo $fila['inqui_codi'] ?> </td>
				<td><?php echo utf8_encode($fila['inqui_nomb']) ?> </td>
				<td><?php echo utf8_encode($fila['inqui_edad']) ?> </td>
				<td><?php echo utf8_encode($fila['inqui_sexo']) ?> </td> 
				<td><?php echo utf8_encode($fila['apar_nomb']) ?> </td> 
				<td align='center'> 
				<a class="btn btn-danger borrar_inqui" href="#" data-toggle="tooltip" codigo="<?php echo  $fila['inqui_codi'] ?>">
  					<i class="fa fa-trash-o"  aria-hidden="true"></i>
  					<span class="sr-only">Delete</span>
				</a> </td> 
				<td align='center'>
				<a class="btn btn-primary editar_inqui" href="#" data-toggle="tooltip" codigo="<?php echo $fila['inqui_codi'] ?>">
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