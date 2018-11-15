<?php
	require_once('unidad_modelo.php');
    require_once('../ciudades/ciudad_modelo.php');
    require_once('../administrador/administrador_modelo.php');
	$codigo = $_POST['codigo'];
	$unidad = new Unidades();
	$unidad->consultar($codigo);
    $ciudad = new Ciudades();
    $listaciudades=$ciudad->lista();
    $administrador = new Administrador();
    $listaadministrador=$administrador->lista();
?>

 <!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Unidades</i>
        
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar5" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
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
    
                <form class="form-horizontal" role="form"  id="funi">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="uni_codi">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="uni_codi" name="uni_codi" placeholder="Ingrese Codigo"
                            value = "<?php echo trim($unidad->uni_codi); ?>" readonly="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="uni_nomb">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="uni_nomb" name="uni_nomb" placeholder="Ingrese Nombre del Pais"
                            value = "<?php echo trim($unidad->uni_nomb); ?>">
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="ciu_codi">Ciudad:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="ciu_codi" name="ciu_codi">
                                <?php foreach($listaciudades as $fila){ 
                                if(trim($unidad->ciu_codi) == $fila['ciu_codi']){
                                ?>
                                <option selected value="<?php echo trim($fila['ciu_codi']); ?>" >
                                <?php echo utf8_encode(trim($fila['ciu_nomb'])); ?> </option>
                                <?php }
                                else{ ?>
                                <option value="<?php echo trim($fila['ciu_codi']); ?>" >
                                <?php echo utf8_encode(trim($fila['ciu_nomb'])); ?> </option>
                                
                                <?php }
                                } ?>
                            </select>   
                        </div>
                    </div>

                     <div class="form-group">
                            <label class="control-label col-sm-2" for="admin_codi">Administrador:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="admin_codi" name="admin_codi">
                                    <?php foreach($listaadministrador as $fila){ 
                                    if(trim($unidad->admin_codi) == $fila['admin_codi']){
                                    ?>
                                    <option selected value="<?php echo trim($fila['admin_codi']); ?>" >
                                    <?php echo utf8_encode(trim($fila['admin_nomb'])); ?> </option>
                                    <?php }
                                    else{ ?>
                                    <option value="<?php echo trim($fila['admin_codi']); ?>" >
                                    <?php echo utf8_encode(trim($fila['admin_nomb'])); ?> </option>
                                    
                                    <?php }
                                    } ?>
                                </select>   
                            </div>
                        </div>
					

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizar_uni" data-toggle="tooltip" title="Actualizar Pais" class="btn btn-primary">Actualizar</button>
                            <button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edición" class="btn btn-success btncerrar5"> Cancelar </button>
                        </div>

                    </div>                    

					<input type="hidden" id="editar_uni" value="editar_uni" name="accion"/>
			</fieldset>

		</form>
	</div>
