 <?php
	require_once('apartamento_modelo.php');
	require_once('../propietarios/propietario_modelo.php');
	$codigo = $_POST['codigo'];
	$propietarios = new Propietario();
	$listaPropietarios =  $propietarios->lista();
	$apartamentos = new Apartamentos();
	$apartamentos->consultar($codigo);
?>

 <!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Apartamentos</i>
        
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar10" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
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
    
                <form class="form-horizontal" role="form"  id="fapar">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="apar_codi">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="apar_codi" name="apar_codi" placeholder="Ingrese Codigo"
                            value = "<?php echo trim($apartamentos->apar_codi); ?>" readonly="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="apar_nomb">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="apar_nomb" name="apar_nomb" placeholder="Ingrese Nombre del Apartamento"
                            value = "<?php echo trim($apartamentos->apar_nomb); ?>">
                        </div>
                    </div>
					
					
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="propi_codi">Propietarios:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="propi_codi" name="propi_codi">
								<?php foreach($listaPropietarios as $fila){ 
								if(trim($apartamentos->propi_codi) == $fila['propi_codi']){
								?>
								<option selected value="<?php echo trim($fila['propi_codi']); ?>" >
								<?php echo utf8_encode(trim($fila['propi_nomb'])); ?> </option>
								<?php }
								else{ ?>
								<option value="<?php echo trim($fila['propi_codi']); ?>" >
								<?php echo utf8_encode(trim($fila['propi_nomb'])); ?> </option>
								
								<?php }
								} ?>
							</select>	
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizar_apar" data-toggle="tooltip" title="Actualizar Apartamentos" class="btn btn-primary">Actualizar</button>
                            <button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edición" class="btn btn-success btncerrar10"> Cancelar </button>
                        </div>

                    </div>                    

					<input type="hidden" id="editar_apar" value="editar_apar" name="accion"/>
			</fieldset>

		</form>
	</div>
