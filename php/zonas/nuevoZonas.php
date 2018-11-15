<?php
	require_once('../zonas/zonas_modelo.php');
?>	
<!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Zonas</i>
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar9" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
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
    
                <form class="form-horizontal" role="form"  id="fzona">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="zona_codi">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="zona_codi" name="zona_codi" placeholder="Ingrese Codigo"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="zona_nomb">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="zona_nomb" name="zona_nomb" placeholder="Ingrese Nombre Zonas"
                            value = "">
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar_zona" class="btn btn-primary" data-toggle="tooltip" title="Grabar Zona">Grabar Zona</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar9" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo_zona" value="nuevo_zona" name="accion"/>
			</fieldset>

		</form>
	</div>
