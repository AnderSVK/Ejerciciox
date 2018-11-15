<?php
	require_once('../alquiler/alquiler_modelo.php');
    require_once('../zonas/zonas_modelo.php');
    require_once('../inquilinos/inquilino_modelo.php');
	$alquiler = new Alquiler();
	$listaAlquiler=$alquiler->lista();
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
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

					
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="zona_codi">Zona:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="zona_codi" name="zona_codi">
                            <option value="" selected>Seleccione ...</option>
								<?php foreach($listaZonas as $fila){ ?>
								<option value="<?php echo trim($fila['zona_codi']); ?>" >
								<?php echo utf8_encode(trim($fila['zona_nomb'])); ?> </option>

								<?php } ?>
							</select>	
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="inqui_codi">Inquilino:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="inqui_codi" name="inqui_codi">
                            <option value="" selected>Seleccione ...</option>
                                <?php foreach($listaInquilinos as $fila){ ?>
                                <option value="<?php echo trim($fila['inqui_codi']); ?>" >
                                <?php echo utf8_encode(trim($fila['inqui_nomb'])); ?> </option>

                                <?php } ?>
                            </select>   
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar_alqui" class="btn btn-primary" data-toggle="tooltip" title="Grabar Alquiler">Grabar Alquiler</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar12" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo_alqui" value="nuevo_alqui" name="accion"/>
			</fieldset>

		</form>
	</div>
