<?php
	require_once('roles_modelo.php');
	$codigo = $_POST['codigo'];
	$roles = new Roles();
	$roles->consultar($codigo);
?>

 <!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Roles</i>
        
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar4" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
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
    
                <form class="form-horizontal" role="form"  id="frol">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="rol_codi">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="rol_codi" name="rol_codi" placeholder="Ingrese Codigo"
                            value = "<?php echo trim($roles->rol_codi); ?>" readonly="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="rol_nomb">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="rol_nomb" name="rol_nomb" placeholder="Ingrese Nombre del Rol"
                            value = "<?php echo trim($roles->rol_nomb); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="rol_desc">Descripcion:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="rol_desc" name="rol_desc" placeholder="Ingrese Descripcion del Rol"
                            value = "<?php echo trim($roles->rol_desc); ?>">
                        </div>
                    </div>
					
					

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizar_rol" data-toggle="tooltip" title="Actualizar rol" class="btn btn-primary">Actualizar</button>
                            <button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edición" class="btn btn-success btncerrar4"> Cancelar </button>
                        </div>

                    </div>                    

					<input type="hidden" id="editar_rol" value="editar_rol" name="accion"/>
			</fieldset>

		</form>
	</div>
