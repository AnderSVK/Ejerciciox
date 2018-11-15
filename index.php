<?php



session_start();
if(!isset($_SESSION["usu_nomb"])){
  header("location:login.php");
}
$rol = $_SESSION['rol_codi'];
echo '<h1 align=center> <font color="white">Bienvenido usuario:'.$_SESSION["usu_nomb"].'</font></h1>';
echo '<h1 align=center><font color="white">*'.$_SESSION["rol_nomb"].'</font></h1>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title >CEDESOFT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel ="stylesheet" href="css/estilo.css"/>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1 align="center">CEDESOFT</h1>
            <center><img src="imagenes/casa.jpg" class="img-rounded" alt="Cinque Terre" width="145" height="150"></center>
            <?php
            echo '<p align=left><font color="white"><a href="logout.php">Logout</a></font></p>';
            ?>
        </div>
    </div>
    <div class="container">
        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Menu</div>
            <div class="panel-body">
                <div class="form-group" id="opciones">
                    <div class="col-sm-10">
                <?php
                if($rol==2){
                ?>
                                <a id="roles" class="btn btn-primary" href="php/roles/index.php" role="button">
                                    Roles
                                </a>
                                <a id="ciudades" class="btn btn-primary" href="php/ciudades/index.php" role="button">
                                    Ciudades
                                </a>
                                <a id="pais" class="btn btn-primary" href="php/pais/index.php" role="button">
                                    Paises
                                </a>
                                <a id="unidades" class="btn btn-primary" href="php/unidades/index.php" role="button">
                                    Unidades
                                </a>
                                 <a id="administradorvista" class="btn btn-primary" href="php/administrador/indexvista.php" role="button">
                                    Administradores
                                </a>
                                <a id="apartamentosvista" class="btn btn-primary" href="php/apartamentos/indexvista.php" role="button">
                                    Apartamentos
                                </a>
                                <a id="procesovista" class="btn btn-primary" href="php/procesos/indexvista.php" role="button">
                                    Procesos
                                </a>
                                <a id="propietariovista" class="btn btn-primary" href="php/propietarios/indexvista.php" role="button">
                                    Propietarios
                                </a>
                                <a id="zonavista" class="btn btn-primary" href="php/zonas/indexvista.php" role="button">
                                    Zonas
                                </a>
                                <a id="inquilinovista" class="btn btn-primary" href="php/inquilinos/indexvista.php" role="button">
                                    Inquilino
                                </a>
                                <a id="alquilervista" class="btn btn-primary" href="php/alquiler/indexvista.php" role="button">
                                    Alquiler
                                </a>
                                <a id="vehiculovista" class="btn btn-primary" href="php/Vehiculo/indexvista.php" role="button">
                                    Vehiculos
                                </a>
                                <a id="registrovista" class="btn btn-primary" href="php/registro/indexvista.php" role="button">
                                    Registros
                                </a>
                                <a id="notificacionvista" class="btn btn-primary" href="php/notificaciones/indexvista.php" role="button">
                                    Notificacion Personal
                                </a>
                                <a id="notificaciongvista" class="btn btn-primary" href="php/notificacionesg/indexvista.php" role="button">
                                    Notificacion Grupal
                                </a>
                                <a id="notificacionuvista" class="btn btn-primary" href="php/notificacionesu/indexvista.php" role="button">
                                    Notificacion Unidad
                                </a>
                                <a id="presupuestovista" class="btn btn-primary" href="php/presupuestos/indexvista.php" role="button">
                                    presupuestos
                                </a>
                                <a id="cobrovista" class="btn btn-primary" href="php/cobros/indexvista.php" role="button">
                                    Cobros
                                </a>
                                
                <?php
                }
                else if($rol ==1)
                {
                ?>
                                <a id="rolesvista" class="btn btn-primary" href="php/roles/indexvista.php" role="button">
                                    Roles
                                </a>
                                <a id="ciudadesvista" class="btn btn-primary" href="php/ciudades/indexvista.php" role="button">
                                    Ciudades
                                </a>
                                <a id="paisvista" class="btn btn-primary" href="php/pais/indexvista.php" role="button">
                                    Paises
                                </a>
                                <a id="unidadesvista" class="btn btn-primary" href="php/unidades/indexvista.php" role="button">
                                    Unidades
                                </a>
                                 <a id="administradorvista" class="btn btn-primary" href="php/administrador/indexvista.php" role="button">
                                    Administradores
                                </a>
                                <a id="apartamentosvista" class="btn btn-primary" href="php/apartamentos/indexvista.php" role="button">
                                    Apartamentos
                                </a>
                                <a id="procesovista" class="btn btn-primary" href="php/procesos/indexvista.php" role="button">
                                    Procesos
                                </a>
                                <a id="propietariovista" class="btn btn-primary" href="php/propietarios/indexvista.php" role="button">
                                    Propietarios
                                </a>
                                <a id="zonavista" class="btn btn-primary" href="php/zonas/indexvista.php" role="button">
                                    Zonas
                                </a>
                                <a id="inquilinovista" class="btn btn-primary" href="php/inquilinos/indexvista.php" role="button">
                                    Inquilino
                                </a>
                                <a id="alquilervista" class="btn btn-primary" href="php/alquiler/indexvista.php" role="button">
                                    Alquiler
                                </a>
                                <a id="vehiculovista" class="btn btn-primary" href="php/Vehiculo/indexvista.php" role="button">
                                    Vehiculos
                                </a>
                                <a id="registrovista" class="btn btn-primary" href="php/registro/indexvista.php" role="button">
                                    Registros
                                </a>
                                <a id="notificacionvista" class="btn btn-primary" href="php/notificaciones/indexvista.php" role="button">
                                    Notificacion Personal
                                </a>
                                <a id="notificaciongvista" class="btn btn-primary" href="php/notificacionesg/indexvista.php" role="button">
                                    Notificacion Grupal
                                </a>
                                <a id="notificacionuvista" class="btn btn-primary" href="php/notificacionesu/indexvista.php" role="button">
                                    Notificacion Unidad
                                </a>
                                <a id="presupuestovista" class="btn btn-primary" href="php/presupuestos/indexvista.php" role="button">
                                    presupuestos
                                </a>
                                <a id="cobrovista" class="btn btn-primary" href="php/cobros/indexvista.php" role="button">
                                    Cobros
                                </a>
                <?php
                }
                else if($rol ==3)
                {
                ?>
                                <a id="rolesvista" class="btn btn-primary" href="php/roles/indexvista.php" role="button">
                                    Roles
                                </a>
                                <a id="ciudadesvista" class="btn btn-primary" href="php/ciudades/indexvista.php" role="button">
                                    Ciudades
                                </a>
                                <a id="paisvista" class="btn btn-primary" href="php/pais/indexvista.php" role="button">
                                    Paises
                                </a>
                                <a id="unidadesvista" class="btn btn-primary" href="php/unidades/indexvista.php" role="button">
                                    Unidades
                                </a>
                                 <a id="administradorvista" class="btn btn-primary" href="php/administrador/indexvista.php" role="button">
                                    Administradores
                                </a>
                                <a id="apartamentos" class="btn btn-primary" href="php/apartamentos/index.php" role="button">
                                    Apartamentos
                                </a>
                                <a id="procesos" class="btn btn-primary" href="php/procesos/index.php" role="button">
                                    Procesos
                                </a>
                                <a id="propietarios" class="btn btn-primary" href="php/propietarios/index.php" role="button">
                                    Propietarios
                                </a>
                                <a id="zonavista" class="btn btn-primary" href="php/zonas/indexvista.php" role="button">
                                    Zonas
                                </a>
                                <a id="inquilinovista" class="btn btn-primary" href="php/inquilinos/indexvista.php" role="button">
                                    Inquilino
                                </a>
                                <a id="alquilervista" class="btn btn-primary" href="php/alquiler/indexvista.php" role="button">
                                    Alquiler
                                </a>
                                <a id="vehiculo" class="btn btn-primary" href="php/Vehiculo/index.php" role="button">
                                    Vehiculos
                                </a>
                                <a id="registrovista" class="btn btn-primary" href="php/registro/indexvista.php" role="button">
                                    Registros
                                </a>
                                <a id="notificacionvista" class="btn btn-primary" href="php/notificaciones/indexvista.php" role="button">
                                    Notificacion Personal
                                </a>
                                <a id="notificaciongvista" class="btn btn-primary" href="php/notificacionesg/indexvista.php" role="button">
                                    Notificacion Grupal
                                </a>
                                <a id="notificacionuvista" class="btn btn-primary" href="php/notificacionesu/indexvista.php" role="button">
                                    Notificacion Unidad
                                </a>
                                <a id="presupuestovista" class="btn btn-primary" href="php/presupuestos/indexvista.php" role="button">
                                    presupuestos
                                </a>
                                <a id="cobrovista" class="btn btn-primary" href="php/cobros/indexvista.php" role="button">
                                    Cobros
                                </a>
                <?php
                }
                else if($rol ==4)
                {
                ?>
                                <a id="rolesvista" class="btn btn-primary" href="php/roles/indexvista.php" role="button">
                                    Roles
                                </a>
                                <a id="ciudadesvista" class="btn btn-primary" href="php/ciudades/indexvista.php" role="button">
                                    Ciudades
                                </a>
                                <a id="paisvista" class="btn btn-primary" href="php/pais/indexvista.php" role="button">
                                    Paises
                                </a>
                                <a id="unidadesvista" class="btn btn-primary" href="php/unidades/indexvista.php" role="button">
                                    Unidades
                                </a>
                                 <a id="administradorvista" class="btn btn-primary" href="php/administrador/indexvista.php" role="button">
                                    Administradores
                                </a>
                                <a id="apartamentosvista" class="btn btn-primary" href="php/apartamentos/indexvista.php" role="button">
                                    Apartamentos
                                </a>
                                <a id="procesovista" class="btn btn-primary" href="php/procesos/indexvista.php" role="button">
                                    Procesos
                                </a>
                                <a id="propietariovista" class="btn btn-primary" href="php/propietarios/indexvista.php" role="button">
                                    Propietarios
                                </a>
                                <a id="zonavista" class="btn btn-primary" href="php/zonas/indexvista.php" role="button">
                                    Zonas
                                </a>
                                <a id="inquilinos" class="btn btn-primary" href="php/inquilinos/index.php" role="button">
                                    Inquilino
                                </a>
                                <a id="alquilervista" class="btn btn-primary" href="php/alquiler/indexvista.php" role="button">
                                    Alquiler
                                </a>
                                <a id="vehiculovista" class="btn btn-primary" href="php/Vehiculo/indexvista.php" role="button">
                                    Vehiculos
                                </a>
                                <a id="registrovista" class="btn btn-primary" href="php/registro/indexvista.php" role="button">
                                    Registros
                                </a>
                                <a id="notificacionvista" class="btn btn-primary" href="php/notificaciones/indexvista.php" role="button">
                                    Notificacion Personal
                                </a>
                                <a id="notificaciongvista" class="btn btn-primary" href="php/notificacionesg/indexvista.php" role="button">
                                    Notificacion Grupal
                                </a>
                                <a id="notificacionuvista" class="btn btn-primary" href="php/notificacionesu/indexvista.php" role="button">
                                    Notificacion Unidad
                                </a>
                                <a id="presupuestovista" class="btn btn-primary" href="php/presupuestos/indexvista.php" role="button">
                                    presupuestos
                                </a>
                                <a id="cobrovista" class="btn btn-primary" href="php/cobros/indexvista.php" role="button">
                                    Cobros
                                </a>
                <?php
                }
                else if($rol ==5)
                {
                ?>
                                <a id="rolesvista" class="btn btn-primary" href="php/roles/indexvista.php" role="button">
                                    Roles
                                </a>
                                <a id="ciudadesvista" class="btn btn-primary" href="php/ciudades/indexvista.php" role="button">
                                    Ciudades
                                </a>
                                <a id="paisvista" class="btn btn-primary" href="php/pais/indexvista.php" role="button">
                                    Paises
                                </a>
                                <a id="unidadesvista" class="btn btn-primary" href="php/unidades/indexvista.php" role="button">
                                    Unidades
                                </a>
                                 <a id="administradorvista" class="btn btn-primary" href="php/administrador/indexvista.php" role="button">
                                    Administradores
                                </a>
                                <a id="apartamentosvista" class="btn btn-primary" href="php/apartamentos/indexvista.php" role="button">
                                    Apartamentos
                                </a>
                                <a id="procesovista" class="btn btn-primary" href="php/procesos/indexvista.php" role="button">
                                    Procesos
                                </a>
                                <a id="propietariovista" class="btn btn-primary" href="php/propietarios/indexvista.php" role="button">
                                    Propietarios
                                </a>
                                <a id="zonavista" class="btn btn-primary" href="php/zonas/indexvista.php" role="button">
                                    Zonas
                                </a>
                                <a id="inquilinos" class="btn btn-primary" href="php/inquilinos/index.php" role="button">
                                    Inquilino
                                </a>
                                <a id="alquiler" class="btn btn-primary" href="php/alquiler/index.php" role="button">
                                    Alquiler
                                </a>
                                <a id="vehiculovista" class="btn btn-primary" href="php/Vehiculo/indexvista.php" role="button">
                                    Vehiculos
                                </a>
                                <a id="registrovista" class="btn btn-primary" href="php/registro/indexvista.php" role="button">
                                    Registros
                                </a>
                                <a id="notificacionvista" class="btn btn-primary" href="php/notificaciones/indexvista.php" role="button">
                                    Notificacion Personal
                                </a>
                                <a id="notificaciongvista" class="btn btn-primary" href="php/notificacionesg/indexvista.php" role="button">
                                    Notificacion Grupal
                                </a>
                                <a id="notificacionuvista" class="btn btn-primary" href="php/notificacionesu/indexvista.php" role="button">
                                    Notificacion Unidad
                                </a>
                                <a id="presupuestovista" class="btn btn-primary" href="php/presupuestos/indexvista.php" role="button">
                                    presupuestos
                                </a>
                                <a id="cobrovista" class="btn btn-primary" href="php/cobros/indexvista.php" role="button">
                                    Cobros
                                </a>
                <?php
                }
                else if($rol ==6)
                {
                ?>
                                <a id="rolesvista" class="btn btn-primary" href="php/roles/indexvista.php" role="button">
                                    Roles
                                </a>
                                <a id="ciudadesvista" class="btn btn-primary" href="php/ciudades/indexvista.php" role="button">
                                    Ciudades
                                </a>
                                <a id="paisvista" class="btn btn-primary" href="php/pais/indexvista.php" role="button">
                                    Paises
                                </a>
                                <a id="unidadesvista" class="btn btn-primary" href="php/unidades/indexvista.php" role="button">
                                    Unidades
                                </a>
                                 <a id="administradorvista" class="btn btn-primary" href="php/administrador/indexvista.php" role="button">
                                    Administradores
                                </a>
                                <a id="apartamentosvista" class="btn btn-primary" href="php/apartamentos/indexvista.php" role="button">
                                    Apartamentos
                                </a>
                                <a id="procesovista" class="btn btn-primary" href="php/procesos/indexvista.php" role="button">
                                    Procesos
                                </a>
                                <a id="propietariovista" class="btn btn-primary" href="php/propietarios/indexvista.php" role="button">
                                    Propietarios
                                </a>
                                <a id="zonavista" class="btn btn-primary" href="php/zonas/indexvista.php" role="button">
                                    Zonas
                                </a>
                                <a id="inquilinovista" class="btn btn-primary" href="php/inquilinos/indexvista.php" role="button">
                                    Inquilino
                                </a>
                                <a id="alquilervista" class="btn btn-primary" href="php/alquiler/indexvista.php" role="button">
                                    Alquiler
                                </a>
                                <a id="vehiculovista" class="btn btn-primary" href="php/Vehiculo/indexvista.php" role="button">
                                    Vehiculos
                                </a>
                                <a id="registrovista" class="btn btn-primary" href="php/registro/indexvista.php" role="button">
                                    Registros
                                </a>
                                <a id="notificacion" class="btn btn-primary" href="php/notificaciones/index.php" role="button">
                                    Notificacion Personal
                                </a>
                                <a id="notificaciong" class="btn btn-primary" href="php/notificacionesg/index.php" role="button">
                                    Notificacion Grupal
                                </a>
                                <a id="notificacionu" class="btn btn-primary" href="php/notificacionesu/index.php" role="button">
                                    Notificacion Unidad
                                </a>
                                <a id="presupuestovista" class="btn btn-primary" href="php/presupuestos/indexvista.php" role="button">
                                    presupuestos
                                </a>
                                <a id="cobrovista" class="btn btn-primary" href="php/cobros/indexvista.php" role="button">
                                    Cobros
                                </a>
                <?php
                }
                else if($rol ==7)
                {
                ?>
                                <a id="rolesvista" class="btn btn-primary" href="php/roles/indexvista.php" role="button">
                                    Roles
                                </a>
                                <a id="ciudadesvista" class="btn btn-primary" href="php/ciudades/indexvista.php" role="button">
                                    Ciudades
                                </a>
                                <a id="paisvista" class="btn btn-primary" href="php/pais/indexvista.php" role="button">
                                    Paises
                                </a>
                                <a id="unidadesvista" class="btn btn-primary" href="php/unidades/indexvista.php" role="button">
                                    Unidades
                                </a>
                                 <a id="administradorvista" class="btn btn-primary" href="php/administrador/indexvista.php" role="button">
                                    Administradores
                                </a>
                                <a id="apartamentosvista" class="btn btn-primary" href="php/apartamentos/indexvista.php" role="button">
                                    Apartamentos
                                </a>
                                <a id="procesovista" class="btn btn-primary" href="php/procesos/indexvista.php" role="button">
                                    Procesos
                                </a>
                                <a id="propietariovista" class="btn btn-primary" href="php/propietarios/indexvista.php" role="button">
                                    Propietarios
                                </a>
                                <a id="zonavista" class="btn btn-primary" href="php/zonas/indexvista.php" role="button">
                                    Zonas
                                </a>
                                <a id="inquilinovista" class="btn btn-primary" href="php/inquilinos/indexvista.php" role="button">
                                    Inquilino
                                </a>
                                <a id="alquilervista" class="btn btn-primary" href="php/alquiler/indexvista.php" role="button">
                                    Alquiler
                                </a>
                                <a id="vehiculovista" class="btn btn-primary" href="php/Vehiculo/indexvista.php" role="button">
                                    Vehiculos
                                </a>
                                <a id="registrovista" class="btn btn-primary" href="php/registro/indexvista.php" role="button">
                                    Registros
                                </a>
                                <a id="notificacionvista" class="btn btn-primary" href="php/notificaciones/indexvista.php" role="button">
                                    Notificacion Personal
                                </a>
                                <a id="notificaciongvista" class="btn btn-primary" href="php/notificacionesg/indexvista.php" role="button">
                                    Notificacion Grupal
                                </a>
                                <a id="notificacionuvista" class="btn btn-primary" href="php/notificacionesu/indexvista.php" role="button">
                                    Notificacion Unidad
                                </a>
                                <a id="presupuesto" class="btn btn-primary" href="php/presupuestos/index.php" role="button">
                                    presupuestos
                                </a>
                                <a id="cobro" class="btn btn-primary" href="php/cobros/index.php" role="button">
                                    Cobros
                                </a>
                <?php
                }
                else if($rol == 8)
                {
                ?>
                                <a id="rolesvista" class="btn btn-primary" href="php/roles/indexvista.php" role="button">
                                    Roles
                                </a>
                                <a id="ciudadesvista" class="btn btn-primary" href="php/ciudades/indexvista.php" role="button">
                                    Ciudades
                                </a>
                                <a id="paisvista" class="btn btn-primary" href="php/pais/indexvista.php" role="button">
                                    Paises
                                </a>
                                <a id="unidadesvista" class="btn btn-primary" href="php/unidades/indexvista.php" role="button">
                                    Unidades
                                </a>
                                 <a id="administradorvista" class="btn btn-primary" href="php/administrador/indexvista.php" role="button">
                                    Administradores
                                </a>
                                <a id="apartamentosvista" class="btn btn-primary" href="php/apartamentos/indexvista.php" role="button">
                                    Apartamentos
                                </a>
                                <a id="procesovista" class="btn btn-primary" href="php/procesos/indexvista.php" role="button">
                                    Procesos
                                </a>
                                <a id="propietariovista" class="btn btn-primary" href="php/propietarios/indexvista.php" role="button">
                                    Propietarios
                                </a>
                                <a id="zonavista" class="btn btn-primary" href="php/zonas/indexvista.php" role="button">
                                    Zonas
                                </a>
                                <a id="inquilinovista" class="btn btn-primary" href="php/inquilinos/indexvista.php" role="button">
                                    Inquilino
                                </a>
                                <a id="alquilervista" class="btn btn-primary" href="php/alquiler/indexvista.php" role="button">
                                    Alquiler
                                </a>
                                <a id="vehiculovista" class="btn btn-primary" href="php/Vehiculo/indexvista.php" role="button">
                                    Vehiculos
                                </a>
                                <a id="registro" class="btn btn-primary" href="php/registro/index.php" role="button">
                                    Registros
                                </a>
                                <a id="notificacionvista" class="btn btn-primary" href="php/notificaciones/indexvista.php" role="button">
                                    Notificacion Personal
                                </a>
                                <a id="notificaciongvista" class="btn btn-primary" href="php/notificacionesg/indexvista.php" role="button">
                                    Notificacion Grupal
                                </a>
                                <a id="notificacionuvista" class="btn btn-primary" href="php/notificacionesu/indexvista.php" role="button">
                                    Notificacion Grupal
                                </a>
                                <a id="presupuestovista" class="btn btn-primary" href="php/presupuestos/indexvista.php" role="button">
                                    presupuestos
                                </a>
                                <a id="cobrovista" class="btn btn-primary" href="php/cobros/indexvista.php" role="button">
                                    Cobros
                                </a>
                <?php
                }
                else if($rol == 9)
                {
                ?>
                                <a id="roles" class="btn btn-primary" href="php/roles/index.php" role="button">
                                    Roles
                                </a>
                                <a id="ciudades" class="btn btn-primary" href="php/ciudades/index.php" role="button">
                                    Ciudades
                                </a>
                                <a id="pais" class="btn btn-primary" href="php/pais/index.php" role="button">
                                    Paises
                                </a>
                                <a id="unidades" class="btn btn-primary" href="php/unidades/index.php" role="button">
                                    Unidades
                                </a>
                                 <a id="administrador" class="btn btn-primary" href="php/administrador/index.php" role="button">
                                    Administradores
                                </a>
                                <a id="apartamentos" class="btn btn-primary" href="php/apartamentos/index.php" role="button">
                                    Apartamentos
                                </a>
                                <a id="procesos" class="btn btn-primary" href="php/procesos/index.php" role="button">
                                    Procesos
                                </a>
                                <a id="propietarios" class="btn btn-primary" href="php/propietarios/index.php" role="button">
                                    Propietarios
                                </a>
                                <a id="zonas" class="btn btn-primary" href="php/zonas/index.php" role="button">
                                    Zonas
                                </a>
                                <a id="inquilinos" class="btn btn-primary" href="php/inquilinos/index.php" role="button">
                                    Inquilino
                                </a>
                                <a id="alquiler" class="btn btn-primary" href="php/alquiler/index.php" role="button">
                                    Alquiler
                                </a>
                                <a id="vehiculo" class="btn btn-primary" href="php/Vehiculo/index.php" role="button">
                                    Vehiculos
                                </a>
                                <a id="registro" class="btn btn-primary" href="php/registro/index.php" role="button">
                                    Registros
                                </a>
                                <a id="notificacion" class="btn btn-primary" href="php/notificaciones/index.php" role="button">
                                    Notificacion Personal
                                </a>
                                <a id="notificaciong" class="btn btn-primary" href="php/notificacionesg/index.php" role="button">
                                    Notificacion Grupal
                                </a>
                                <a id="notificacionu" class="btn btn-primary" href="php/notificacionesu/index.php" role="button">
                                    Notificacion Grupal
                                </a>
                                <a id="presupuesto" class="btn btn-primary" href="php/presupuestos/index.php" role="button">
                                    presupuestos
                                </a>
                                <a id="cobro" class="btn btn-primary" href="php/cobros/index.php" role="button">
                                    Cobros
                                </a>

                <?php
                }
                ?>


                    </div>
                </div>
            </div>
        </div>
        <div class="panel-group hide" id="contenedor"><div class="panel panel-primary">
            <div class="panel-heading" id="titulo"></div>
            <div class="panel-body">
                <div class="form-group" id="contenido">        
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>

    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="js/funcionesJquery.js"></script>
    <script> $(document).ready(inicio); </script>
</body>
</html>