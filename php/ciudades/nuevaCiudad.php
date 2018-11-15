<?php
	require_once('../pais/pais_modelo.php');
	$pais = new Pais();
	$listaPais=$pais->lista();
?>	
<!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Ciudades</i>
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar2" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
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
    
                <form class="form-horizontal" role="form"  id="fciudad">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="ciu_codi">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ciu_codi" name="ciu_codi" placeholder="Ingrese Codigo"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="ciu_nomb">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ciu_nomb" name="ciu_nomb" placeholder="Ingrese Nombre de la Ciudad"
                            value = "">
                        </div>
                    </div>
					
					
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pais_codi">Pais:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="pais_codi" name="pais_codi">
                            <option value="" selected>Seleccione ...</option>
								<?php foreach($listaPais as $fila){ ?>
								<option value="<?php echo trim($fila['pais_codi']); ?>" >
								<?php echo utf8_encode(trim($fila['pais_nomb'])); ?> </option>

								<?php } ?>
							</select>	
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar_ciu" class="btn btn-primary" data-toggle="tooltip" title="Grabar Ciudad">Grabar Ciudad</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar2" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo_ciu" value="nuevo_ciu" name="accion"/>
			</fieldset>

		</form>
	</div>
