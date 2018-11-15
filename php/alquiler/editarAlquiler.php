<?php
	require_once('alquiler_modelo.php');
    require_once('../zonas/zonas_modelo.php');
    require_once('../inquilinos/inquilino_modelo.php');
	$codigo = $_POST['codigo'];
	$alquiler = new Alquiler();
	$alquiler->consultar($codigo);
    $zonas = new Zonas();
    $listaZonas=$zonas->lista();
    $inquilinos = new Inquilinos();
    $listaInquilinos=$inquilinos->lista();
?>

 <!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Alquiler</i>
        
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar12" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
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
    
                <form class="form-horizontal" role="form"  id="falqui">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="alquizona_codi">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alquizona_codi" name="alquizona_codi" placeholder="Ingrese Codigo"
                            value = "<?php echo trim($alquiler->alquizona_codi); ?>" readonly="true">
                        </div>
                    </div>

					
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="zona_codi">Zona:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="zona_codi" name="zona_codi">
                                <?php foreach($listaZonas as $fila){ 
                                if(trim($alquiler->zona_codi) == $fila['zona_codi']){
                                ?>
                                <option selected value="<?php echo trim($fila['zona_codi']); ?>" >
                                <?php echo utf8_encode(trim($fila['zona_nomb'])); ?> </option>
                                <?php }
                                else{ ?>
                                <option value="<?php echo trim($fila['zona_codi']); ?>" >
                                <?php echo utf8_encode(trim($fila['zona_nomb'])); ?> </option>
                                
                                <?php }
                                } ?>
                            </select>   
                        </div>
                    </div>

                     <div class="form-group">
                            <label class="control-label col-sm-2" for="inqui_codi">Inquilino:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="inqui_codi" name="inqui_codi">
                                    <?php foreach($listaInquilinos as $fila){ 
                                    if(trim($alquiler->inqui_codi) == $fila['inqui_codi']){
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
                            <button type="button" id="actualizar_alqui" data-toggle="tooltip" title="Actualizar Alquiler" class="btn btn-primary">Actualizar</button>
                            <button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edición" class="btn btn-success btncerrar12"> Cancelar </button>
                        </div>

                    </div>                    

					<input type="hidden" id="editar_alqui" value="editar_alqui" name="accion"/>
			</fieldset>

		</form>
	</div>
