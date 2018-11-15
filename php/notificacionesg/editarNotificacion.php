 <?php
	require_once('notificaciones_modelo.php');
	require_once('../apartamentos/apartamento_modelo.php');
	$codigo = $_POST['codigo'];
	$apartamentos = new Apartamentos();
	$listaApartamentos =  $apartamentos->lista();
	$notificacion = new Notificaciong();
	$notificacion->consultar($codigo);
?>

 <!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Notificaciones</i>
        
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar16" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
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
    
                <form class="form-horizontal" role="form"  id="fnotig">


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
                        <label class="control-label col-sm-2" for="apar_codi">Destinatario Apartamento:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="apar_codi" name="apar_codi">
								<?php foreach($listaApartamentos as $fila){ 
								if(trim($notificacion->apar_codi) == $fila['apar_codi']){
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
                            <button type="button" id="actualizar_notig" data-toggle="tooltip" title="Actualizar Notificacion" class="btn btn-primary">Actualizar</button>
                            <button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edición" class="btn btn-success btncerrar16"> Cancelar </button>
                        </div>

                    </div>                    

					<input type="hidden" id="editar_notig" value="editar_notig" name="accion"/>
			</fieldset>

		</form>
	</div>
