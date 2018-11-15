 <?php
	require_once('inquilino_modelo.php');
	require_once('../apartamentos/apartamento_modelo.php');
	$codigo = $_POST['codigo'];
	$apartamentos = new Apartamentos();
	$listaApartamentos =  $apartamentos->lista();
	$inquilinos = new Inquilinos();
	$inquilinos->consultar($codigo);
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
                            value = "<?php echo trim($inquilinos->inqui_codi); ?>" readonly="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="inqui_nomb">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inqui_nomb" name="inqui_nomb" placeholder="Ingrese Nombre del Inquilino"
                            value = "<?php echo trim($inquilinos->inqui_nomb); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="inqui_edad">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inqui_edad" name="inqui_edad" placeholder="Ingrese la Edad"
                            value = "<?php echo trim($inquilinos->inqui_edad); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="inqui_sexo">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inqui_sexo" name="inqui_sexo" placeholder="Ingrese el Sexo"
                            value = "<?php echo trim($inquilinos->inqui_sexo); ?>">
                        </div>
                    </div>
					
					
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="apar_codi">Apartamentos:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="apar_codi" name="apar_codi">
								<?php foreach($listaApartamentos as $fila){ 
								if(trim($inquilinos->apar_codi) == $fila['apar_codi']){
								?>
								<option selected value="<?php echo trim($fila['apar_codi']); ?>" >
								<?php echo utf8_encode(trim($fila['apar_nomb'])); ?> </option>
								<?php }
								else{ ?>
								<option value="<?php echo trim($fila['apar_codi']); ?>" >
								<?php echo utf8_encode(trim($fila['apar_nomb'])); ?> </option>
								
								<?php }
								} ?>
							</select>	
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizar_inqui" data-toggle="tooltip" title="Actualizar Inquilinos" class="btn btn-primary">Actualizar</button>
                            <button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edición" class="btn btn-success btncerrar11"> Cancelar </button>
                        </div>

                    </div>                    

					<input type="hidden" id="editar_inqui" value="editar_inqui" name="accion"/>
			</fieldset>

		</form>
	</div>
