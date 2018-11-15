<?php
	require_once('../procesos/proceso_modelo.php');
?>	
<!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Procesos</i>
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar7" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
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
    
                <form class="form-horizontal" role="form"  id="fproce">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="proce_codi">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="proce_codi" name="proce_codi" placeholder="Ingrese Codigo"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="proce_nomb">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="proce_nomb" name="proce_nomb" placeholder="Ingrese Nombre Proceso"
                            value = "">
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar_proce" class="btn btn-primary" data-toggle="tooltip" title="Grabar Proceso">Grabar Proceso</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar7" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo_proce" value="nuevo_proce" name="accion"/>
			</fieldset>

		</form>
	</div>
