<?php
	require_once('../unidades/unidad_modelo.php');
    require_once('../ciudades/ciudad_modelo.php');
    require_once('../administrador/administrador_modelo.php');
	$unidad = new Unidades();
	$listaUnidad=$unidad->lista();
    $ciudad = new Ciudades();
    $listaciudades=$ciudad->lista();
    $administrador = new Administrador();
    $listaadministrador=$administrador->lista();
?>	
<!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Unidades</i>
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar5" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
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
    
                <form class="form-horizontal" role="form"  id="funi">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="uni_codi">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="uni_codi" name="uni_codi" placeholder="Ingrese Codigo"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="uni_nomb">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="uni_nomb" name="uni_nomb" placeholder="Ingrese Nombre de la Unidad"
                            value = "">
                        </div>
                    </div>
					
					
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="ciu_codi">Ciudad:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="ciu_codi" name="ciu_codi">
                            <option value="" selected>Seleccione ...</option>
								<?php foreach($listaciudades as $fila){ ?>
								<option value="<?php echo trim($fila['ciu_codi']); ?>" >
								<?php echo utf8_encode(trim($fila['ciu_nomb'])); ?> </option>

								<?php } ?>
							</select>	
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="admin_codi">Administrador:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="admin_codi" name="admin_codi">
                            <option value="" selected>Seleccione ...</option>
                                <?php foreach($listaadministrador as $fila){ ?>
                                <option value="<?php echo trim($fila['admin_codi']); ?>" >
                                <?php echo utf8_encode(trim($fila['admin_nomb'])); ?> </option>

                                <?php } ?>
                            </select>   
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar_uni" class="btn btn-primary" data-toggle="tooltip" title="Grabar Unidad">Grabar Unidad</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar5" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo_uni" value="nuevo_uni" name="accion"/>
			</fieldset>

		</form>
	</div>
