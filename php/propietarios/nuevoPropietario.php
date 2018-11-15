<?php
	require_once('../propietarios/propietario_modelo.php');
?>	
<!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Propietario</i>
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar8" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
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
    
                <form class="form-horizontal" role="form"  id="fpropi">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="propi_codi">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="propi_codi" name="propi_codi" placeholder="Ingrese Codigo"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="propi_nomb">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="propi_nomb" name="propi_nomb" placeholder="Ingrese Nombre Propietario"
                            value = "">
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar_propi" class="btn btn-primary" data-toggle="tooltip" title="Grabar Propietario">Grabar Propietario</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar8" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo_propi" value="nuevo_propi" name="accion"/>
			</fieldset>

		</form>
	</div>
