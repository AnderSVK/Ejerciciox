<?php
	require_once('../apartamentos/apartamento_modelo.php');

	$apartamentos = new Apartamentos();
	$listaApartamentos=$apartamentos->lista();
?>	
<!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Inquilinos</i>
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar11" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
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
    
                <form class="form-horizontal" role="form"  id="finqui">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="inqui_codi">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inqui_codi" name="inqui_codi" placeholder="Ingrese Codigo"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="inqui_nomb">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inqui_nomb" name="inqui_nomb" placeholder="Ingrese Nombre del Inquilino"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="inqui_edad">Edad:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inqui_edad" name="inqui_edad" placeholder="Ingrese Edad del inquilino"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="inqui_sexo">Sexo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inqui_sexo" name="inqui_sexo" placeholder="Ingrese sexo del inquilino"
                            value = "">
                        </div>
                    </div>
					
					
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="apar_codi">Apartamentos:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="apar_codi" name="apar_codi">
                            <option value="" selected>Seleccione ...</option>
								<?php foreach($listaApartamentos as $fila){ ?>
								<option value="<?php echo trim($fila['apar_codi']); ?>" >
								<?php echo utf8_encode(trim($fila['apar_nomb'])); ?> </option>

								<?php } ?>
							</select>	
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar_inqui" class="btn btn-primary" data-toggle="tooltip" title="Grabar Inquilino">Grabar Inquilino</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar11" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo_inqui" value="nuevo_inqui" name="accion"/>
			</fieldset>

		</form>
	</div>
