<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
      session_start(); 
      if ($_SESSION['session_id']=="")
      {    
        session_destroy();  
      } 
    ?>
    <title>Parroquia NS. del valle</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">  
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
  </head>

  <body class="hold-transition login-page">
    <div class="login-box">  
      <div class="login-logo">
        <a href="login.php"><b>Inicio de Sesión</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <img src="img/logo_inicio.png" class="img-responsive center-block" alt="Imagen responsive">
  
        <form action="login.php" role="form" method="post">    
          <div class="form-group has-feedback">
            <input name="user" id="user" type="text" class="form-control" placeholder="Usuario">
            <span class="fa fa-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input name="password" id="pass" type="password" class="form-control" placeholder="Contraseña">
            <span class="fa fa-key form-control-feedback"></span>
          </div>

          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Recordar Datos
                </label>
              </div>
            </div><!-- /.col-xs-8 -->
            <div class="col-xs-4">
              <button name="btnlogin" id="btnvalidar" value="btnlogin" type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
            </div><!-- /.col-xs-4 -->
          </div><!-- /.row -->
          <p class="login-box-msg">Parroquia Nuestra Señora del Valle - Caracas</p>
          <div id="error" class="alert alert-danger alert-dismissable"></div>
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
         
    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
    <script src="dist/js/validacionLogin.js"></script>
  </body>
</html>