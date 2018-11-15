 <?php
	require_once('registro_modelo.php');
	require_once('../vehiculo/vehiculo_modelo.php');
	$codigo = $_POST['codigo'];
	$vehiculo = new Vehiculo();
	$listaVehiculos =  $vehiculo->lista();
	$registro = new Registro();
	$registro->consultar($codigo);
?>

 <!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Registro</i>
        
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
                            value = "<?php echo trim($registro->regis_codi); ?>" readonly="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="vehi_codi">Vehiculo:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="vehi_codi" name="vehi_codi">
                                <?php foreach($listaVehiculos as $fila){ 
                                if(trim($registro->vehi_codi) == $fila['vehi_codi']){
                                ?>
                                <option selected value="<?php echo trim($fila['vehi_codi']); ?>" >
                                <?php echo utf8_encode(trim($fila['vehi_nomb'])); ?> </option>
                                <?php }
                                else{ ?>
                                <option value="<?php echo trim($fila['vehi_codi']); ?>" >
                                <?php echo utf8_encode(trim($fila['vehi_nomb'])); ?> </option>
                                
                                <?php }
                                } ?>
                            </select>   
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="ingre_hora">Hora Ingreso:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ingre_hora" name="ingre_hora" placeholder="Ingrese hora 00:00:00 23:59:59"
                            value = "<?php echo trim($registro->ingre_hora); ?>">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-sm-2" for="sali_hora">Hora Salida:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sali_hora" name="sali_hora" placeholder="Ingrese hora 00:00:00 23:59:59"
                            value = "<?php echo trim($registro->sali_hora); ?>">
                        </div>
                    </div>
					
					
                    

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizar_regis" data-toggle="tooltip" title="Actualizar Registros" class="btn btn-primary">Actualizar</button>
                            <button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edición" class="btn btn-success btncerrar14"> Cancelar </button>
                        </div>

                    </div>                    

					<input type="hidden" id="editar_regis" value="editar_regis" name="accion"/>
			</fieldset>

		</form>
	</div>
