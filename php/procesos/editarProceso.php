<?php
	require_once('proceso_modelo.php');
	$codigo = $_POST['codigo'];
	$proceso = new Proceso();
	$proceso->consultar($codigo);
?>

 <!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Procesos</i>
        
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar7" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
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
    
                <form class="form-horizontal" role="form"  id="fproce">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="proce_codi">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="proce_codi" name="proce_codi" placeholder="Ingrese Codigo"
                            value = "<?php echo trim($proceso->proce_codi); ?>" readonly="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="proce_nomb">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="proce_nomb" name="proce_nomb" placeholder="Ingrese Nombre del Proceso"
                            value = "<?php echo trim($proceso->proce_nomb); ?>">
                        </div>
                    </div>
					
					

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizar_proce" data-toggle="tooltip" title="Actualizar Proceso" class="btn btn-primary">Actualizar</button>
                            <button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edición" class="btn btn-success btncerrar7"> Cancelar </button>
                        </div>

                    </div>                    

					<input type="hidden" id="editar_proce" value="editar_proce" name="accion"/>
			</fieldset>

		</form>
	</div>
