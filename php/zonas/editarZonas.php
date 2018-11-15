<?php
	require_once('zonas_modelo.php');
	$codigo = $_POST['codigo'];
	$zonas = new Zonas();
	$zonas->consultar($codigo);
?>

 <!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Zonas</i>
        
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar9" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
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
    
                <form class="form-horizontal" role="form"  id="fzona">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="zona_codi">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="zona_codi" name="zona_codi" placeholder="Ingrese Codigo"
                            value = "<?php echo trim($zonas->zona_codi); ?>" readonly="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="zona_nomb">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="zona_nomb" name="zona_nomb" placeholder="Ingrese Nombre del Propietario"
                            value = "<?php echo trim($zonas->zona_nomb); ?>">
                        </div>
                    </div>
					
					s

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizar_zonas" data-toggle="tooltip" title="Actualizar Zonas" class="btn btn-primary">Actualizar</button>
                            <button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edición" class="btn btn-success btncerrar9"> Cancelar </button>
                        </div>

                    </div>                    

					<input type="hidden" id="editar_zonas" value="editar_zonas" name="accion"/>
			</fieldset>

		</form>
	</div>
