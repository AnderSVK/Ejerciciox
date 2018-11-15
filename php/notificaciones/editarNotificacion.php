 <?php
	require_once('notificacion_modelo.php');
	require_once('../inquilinos/inquilino_modelo.php');
	$codigo = $_POST['codigo'];
	$inquilinos = new Inquilinos();
	$listaInquilinos =  $inquilinos->lista();
	$notificacion = new Notificacion();
	$notificacion->consultar($codigo);
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
                            value = "<?php echo trim($notificacion->noti_codi); ?>" readonly="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="noti_nomb">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="noti_nomb" name="noti_nomb" placeholder="Ingrese Notificacion"
                            value = "<?php echo trim($notificacion->noti_nomb); ?>">
                        </div>
                    </div>
					
					
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="inqui_codi">Destinatario:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="inqui_codi" name="inqui_codi">
								<?php foreach($listaInquilinos as $fila){ 
								if(trim($notificacion->inqui_codi) == $fila['inqui_codi']){
								?>
								<option selected value="<?php echo trim($fila['inqui_codi']); ?>" >
								<?php echo utf8_encode(trim($fila['inqui_nomb'])); ?> </option>
								<?php }
								else{ ?>
								<option value="<?php echo trim($fila['inqui_codi']); ?>" >
								<?php echo utf8_encode(trim($fila['inqui_nomb'])); ?> </option>
								
								<?php }
								} ?>
							</select>	
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizar_noti" data-toggle="tooltip" title="Actualizar Notificacion" class="btn btn-primary">Actualizar</button>
                            <button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edición" class="btn btn-success btncerrar15"> Cancelar </button>
                        </div>

                    </div>                    

					<input type="hidden" id="editar_noti" value="editar_noti" name="accion"/>
			</fieldset>

		</form>
	</div>
