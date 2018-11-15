 <?php
	require_once('vehiculo_modelo.php');
	require_once('../inquilinos/inquilino_modelo.php');
	$codigo = $_POST['codigo'];
	$inquilinos = new Inquilinos();
	$listaInquilinos =  $inquilinos->lista();
	$vehiculo = new Vehiculo();
	$vehiculo->consultar($codigo);
?>

 <!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Vehiculos</i>
        
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar13" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
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
    
                <form class="form-horizontal" role="form"  id="fvehi">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="vehi_codi">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="vehi_codi" name="vehi_codi" placeholder="Ingrese Codigo"
                            value = "<?php echo trim($vehiculo->vehi_codi); ?>" readonly="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="vehi_nomb">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="vehi_nomb" name="vehi_nomb" placeholder="Ingrese Nombre del Vehiculo"
                            value = "<?php echo trim($vehiculo->vehi_nomb); ?>">
                        </div>
                    </div>
					
					
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="inqui_codi">Dueño:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="inqui_codi" name="inqui_codi">
								<?php foreach($listaInquilinos as $fila){ 
								if(trim($vehiculo->inqui_codi) == $fila['inqui_codi']){
								?>
								<option selected value="<?php echo trim($fila['inqui_codi']); ?>" >
								<?php echo utf8_encode(trim($fila['inqui_nomb'])); ?> </option>
								<?php }
								else{ ?>
								<option value="<?php echo trim($fila['inqui_codi']); ?>" >
								<?php echo utf8_encode(trim($fila['inqui_nomb'])); ?> </option>
								
								<?php }
								} ?>
							</select>	
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizar_vehi" data-toggle="tooltip" title="Actualizar Vehiculos" class="btn btn-primary">Actualizar</button>
                            <button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edición" class="btn btn-success btncerrar13"> Cancelar </button>
                        </div>

                    </div>                    

					<input type="hidden" id="editar_vehi" value="editar_vehi" name="accion"/>
			</fieldset>

		</form>
	</div>
