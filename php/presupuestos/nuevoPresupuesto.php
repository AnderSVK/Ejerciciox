<?php
	require_once('../unidades/unidad_modelo.php');

	$unidades = new Unidades();
	$listaUnidades=$unidades->lista();
?>	
<!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Presupuestos</i>
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar18" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
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
    
                <form class="form-horizontal" role="form"  id="fpresu">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="presu_codi">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="presu_codi" name="presu_codi" placeholder="Ingrese Codigo"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="presu_nomb">Presupuesto:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="presu_nomb" name="presu_nomb" placeholder="Ingrese Presupuesto"
                            value = "">
                        </div>
                    </div>
					
					
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="uni_codi">Unidad:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="uni_codi" name="uni_codi">
                            <option value="" selected>Seleccione ...</option>
								<?php foreach($listaUnidades as $fila){ ?>
								<option value="<?php echo trim($fila['uni_codi']); ?>" >
								<?php echo utf8_encode(trim($fila['uni_nomb'])); ?> </option>

								<?php } ?>
							</select>	
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar_presu" class="btn btn-primary" data-toggle="tooltip" title="Grabar Presupuesto">Grabar Presupuesto</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar18" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo_presu" value="nuevo_presu" name="accion"/>
			</fieldset>

		</form>
	</div>
