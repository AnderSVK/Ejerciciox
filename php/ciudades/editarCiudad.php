 <?php
	require_once('ciudad_modelo.php');
	require_once('../pais/pais_modelo.php');
	$codigo = $_POST['codigo'];
	$pais = new Pais();
	$listaPaises =  $pais->lista();
	$ciudad = new Ciudades();
	$ciudad->consultar($codigo);
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
                            value = "<?php echo trim($ciudad->ciu_codi); ?>" readonly="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="ciu_nomb">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ciu_nomb" name="ciu_nomb" placeholder="Ingrese Nombre de la Ciudad"
                            value = "<?php echo trim($ciudad->ciu_nomb); ?>">
                        </div>
                    </div>
					
					
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pais_codi">País:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="pais_codi" name="pais_codi">
								<?php foreach($listaPaises as $fila){ 
								if(trim($ciudad->pais_codi) == $fila['pais_codi']){
								?>
								<option selected value="<?php echo trim($fila['pais_codi']); ?>" >
								<?php echo utf8_encode(trim($fila['pais_nomb'])); ?> </option>
								<?php }
								else{ ?>
								<option value="<?php echo trim($fila['pais_codi']); ?>" >
								<?php echo utf8_encode(trim($fila['pais_nomb'])); ?> </option>
								
								<?php }
								} ?>
							</select>	
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizar_ciu" data-toggle="tooltip" title="Actualizar Ciudad" class="btn btn-primary">Actualizar</button>
                            <button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edición" class="btn btn-success btncerrar2"> Cancelar </button>
                        </div>

                    </div>                    

					<input type="hidden" id="editar_ciu" value="editar_ciu" name="accion"/>
			</fieldset>

		</form>
	</div>
