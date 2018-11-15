<?php
	require_once('propietario_modelo.php');
	$codigo = $_POST['codigo'];
	$propietario = new Propietario();
	$propietario->consultar($codigo);
?>

 <!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Propietario</i>
        
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar8" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
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
    
                <form class="form-horizontal" role="form"  id="fpropi">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="propi_codi">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="propi_codi" name="propi_codi" placeholder="Ingrese Codigo"
                            value = "<?php echo trim($propietario->propi_codi); ?>" readonly="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="propi_nomb">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="propi_nomb" name="propi_nomb" placeholder="Ingrese Nombre del Propietario"
                            value = "<?php echo trim($propietario->propi_nomb); ?>">
                        </div>
                    </div>
					
					

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizar_propi" data-toggle="tooltip" title="Actualizar Propietario" class="btn btn-primary">Actualizar</button>
                            <button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edición" class="btn btn-success btncerrar8"> Cancelar </button>
                        </div>

                    </div>                    

					<input type="hidden" id="editar_propi" value="editar_propi" name="accion"/>
			</fieldset>

		</form>
	</div>
