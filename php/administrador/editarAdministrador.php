<?php
	require_once('administrador_modelo.php');
	$codigo = $_POST['codigo'];
	$administrador = new Administrador();
	$administrador->consultar($codigo);
?>

 <!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Administrador</i>
        
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar6" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
        </div><!-- /. tools -->
    </div>
    <div class="box-body">

		<div align ="center">
				<div id="actual"> 
				</div>
		</div>


        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Datos</div>
            <div class="panel-body">
    
                <form class="form-horizontal" role="form"  id="fadmi">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="admin_codi">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="admin_codi" name="admin_codi" placeholder="Ingrese Codigo"
                            value = "<?php echo trim($administrador->admin_codi); ?>" readonly="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="admin_nomb">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="admin_nomb" name="admin_nomb" placeholder="Ingrese Nombre del Administrador"
                            value = "<?php echo trim($administrador->admin_nomb); ?>">
                        </div>
                    </div>
					
					

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizar_admin" data-toggle="tooltip" title="Actualizar Administrador" class="btn btn-primary">Actualizar</button>
                            <button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edición" class="btn btn-success btncerrar6"> Cancelar </button>
                        </div>

                    </div>                    

					<input type="hidden" id="editar_admin" value="editar_admin" name="accion"/>
			</fieldset>

		</form>
	</div>
