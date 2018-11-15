<?php
session_start();
if (isset($_SESSION["usu_nomb"])) {
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <script src="js/jquery-1.12.3.min.js" charset="utf-8"></script>
    <script src="bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel ="stylesheet" href="css/estilo.css"/>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form method="post">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1><p class="text-center"><font color="white">Login</font></p></h1>
            <br><br>
            <div class="form-group">
              <label for="usu_nomb"><font color="red">Nombre Usuario</font> </label>
              <input type="text" name="usu_nomb" placeholder="Ingrese usuario" id="usu_nomb" class="form-control">
            </div>
            <div class="form-group">
              <label for="pass"><font color="red">Password </font> </label>
              <input type="password" name="pass" placeholder="Ingrese password" id="pass" class="form-control">
            </div>
            <br>  
            <div class="form-group">
              <input type="button" name="login" id="login" value="Conectar" class="btn btn-danger">
            </div>
            <br>
            <span id="result"></span>
          </form>
        </div>
      </div>
    </div>
    <?php
    echo '<h1 align=center> <b><font color="black">Ingresa tus credenciales</b></h1>';
    echo '<h1 align=center><b><font color="black">Para empezar a formar parte</font></b></h1>';
    echo '<h1 align=center><b><font color="black">De nuestro Sistema</font></b></h1>';
    echo '<h1 align=center><b><font color="black">Porque todas sus funcionalidades</font></b></h1>';
    echo '<h1 align=center><b><font color="black">Esperan por ti</font></b></h1>';

    ?>
  </body>
</html>
<script>

  $(document).ready(function() {

    $('#login').click(function(){
      var usu_nomb = $('#usu_nomb').val();
      var pass = $('#pass').val();
      if($.trim(usu_nomb).length > 0 && $.trim(pass).length > 0){
        $.ajax({
          url:"loguear.php",
          method:"POST",
          data:{usu_nomb:usu_nomb, pass:pass},
          cache:"false",
          beforeSend:function() {
            $('#login').val("Conectando...");
          },
          success:function(data) {
            $('#login').val("Login");
            if (data=="1") {
              $(location).attr('href','index.php');
            } else {
              $("#result").html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong> las credenciales son incorrectas.</div>");
            }
          }
        });
      };
    });
  });
</script>

