<?php
	require_once('../vehiculo/vehiculo_modelo.php');

	$vehiculo = new Vehiculo();
	$listaVehiculos=$vehiculo->lista();
?>	
<!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Registros</i>
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar14" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
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
    
                <form class="form-horizontal" role="form"  id="fregis">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="regis_codi">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="regis_codi" name="regis_codi" placeholder="Ingrese Codigo"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-2" for="vehi_codi">Vehiculos:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="vehi_codi" name="vehi_codi">
                            <option value="" selected>Seleccione ...</option>
                                <?php foreach($listaVehiculos as $fila){ ?>
                                <option value="<?php echo trim($fila['vehi_codi']); ?>" >
                                <?php echo utf8_encode(trim($fila['vehi_nomb'])); ?> </option>

                                <?php } ?>
                            </select>   
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-2" for="ingre_hora">Hora Ingreso:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ingre_hora" name="ingre_hora" placeholder="Ingrese hora 00:00:00: 23:59:59"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="sali_hora">Hora Salida:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sali_hora" name="sali_hora" placeholder="Ingrese hora 00:00:00: 23:59:59"
                            value = "">
                        </div>
                    </div>
					

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar_regis" class="btn btn-primary" data-toggle="tooltip" title="Grabar Registros">Grabar Registros</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar14" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo_regis" value="nuevo_regis" name="accion"/>
			</fieldset>

		</form>
	</div>
