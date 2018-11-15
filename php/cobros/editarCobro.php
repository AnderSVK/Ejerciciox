 <?php
	require_once('cobro_modelo.php');
	require_once('../unidades/unidad_modelo.php');
	$codigo = $_POST['codigo'];
	$unidades = new Unidades();
	$listaUnidades =  $unidades->lista();
	$cobro = new Cobro();
	$cobro->consultar($codigo);
?>

 <!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Cobros</i>
        
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar19" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
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
    
                <form class="form-horizontal" role="form"  id="fcobro">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="cobro_codi">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="cobro_codi" name="cobro_codi" placeholder="Ingrese Codigo"
                            value = "<?php echo trim($cobro->cobro_codi); ?>" readonly="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="cobro_nomb">Cobro:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="cobro_nomb" name="cobro_nomb" placeholder="Ingrese Notificacion"
                            value = "<?php echo trim($cobro->cobro_nomb); ?>">
                        </div>
                    </div>
					
					
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="uni_codi">Unidad:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="uni_codi" name="uni_codi">
								<?php foreach($listaUnidades as $fila){ 
								if(trim($cobro->uni_codi) == $fila['uni_codi']){
								?>
								<option selected value="<?php echo trim($fila['uni_codi']); ?>" >
								<?php echo utf8_encode(trim($fila['uni_nomb'])); ?> </option>
								<?php }
								else{ ?>
								<option value="<?php echo trim($fila['uni_codi']); ?>" >
								<?php echo utf8_encode(trim($fila['uni_nomb'])); ?> </option>
								
								<?php }
								} ?>
							</select>	
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizar_cobro" data-toggle="tooltip" title="Actualizar Cobro" class="btn btn-primary">Actualizar</button>
                            <button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edición" class="btn btn-success btncerrar19"> Cancelar </button>
                        </div>

                    </div>                    

					<input type="hidden" id="editar_cobro value="editar_cobro" name="accion"/>
			</fieldset>

		</form>
	</div>
