<?php
	require_once('../inquilinos/inquilino_modelo.php');

	$inquilino = new Inquilinos();
	$listaInquilinos=$inquilino->lista();
?>	
<!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Notificaciones</i>
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar15" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
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
    
                <form class="form-horizontal" role="form"  id="fnoti">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="noti_codi">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="noti_codi" name="noti_codi" placeholder="Ingrese Codigo"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="noti_nomb">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="noti_nomb" name="noti_nomb" placeholder="Ingrese Notificacion"
                            value = "">
                        </div>
                    </div>
					
					
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="inqui_codi">Destinatario:</label>
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
                            <button type="button" id="grabar_noti" class="btn btn-primary" data-toggle="tooltip" title="Grabar Notificacion">Grabar Notificacion</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar15" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo_noti" value="nuevo_noti" name="accion"/>
			</fieldset>

		</form>
	</div>
