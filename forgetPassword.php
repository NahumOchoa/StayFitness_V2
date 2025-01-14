<?php
ob_start();
error_reporting(0);
$link = mysqli_connect("localhost","root","") or die(header ("Location: error.html"));
mysqli_select_db($link,"bd_fitness") or die(header ("Location: error.html"));
require_once 'inc/dbconnection.php' ;
    if(isset($_POST["forget-password"])){
        if(!empty($_POST["user-email"])){
            $email = trim($_POST["user-email"]);
        } else {
            $error_message = "<li>Email es requerido</li>";
        }
        if(empty($error_message)){
            $query = $db->prepare("SELECT nombre, email FROM registros WHERE email =?");
            $query->execute(array($email));
            $user = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        if(!empty($user)){
//            $msg='yes';
//            echo "<script type='text/javascript'>alert('$msg');</script>";
            require_once ("php/forget-password-mail.php");
        } else {
            $error_message = 'Email no encontrado';
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contraseña Olvidada | StayFitness</title>
    <!--estilos-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style-iniciar-sesion.css">
    <link rel="shortcut icon" href="img/logostayfitnessblanco.png" type="image/x-icon">
</head>

<body>
    <!--Seccion de Menu-->
    <nav class="navbar navbar-expand-md p-0">
      <div class="container-fluid mx-3">
              <a class="navbar-brand" href="index.html">
                  <img src="img/logostayfitnessblanco.png">    
              </a>
          <div class="collapse navbar-collapse">
              <ul class="navbar-nav align-content-center">
                  <li class="nav-item link-li"><a class="nav-link link-a fs-5" href="">CONTRASEÑA OLVIDADA</a></li>
              </ul>
          </div>
      </div>
  </nav> 
  
  <!--Seccion del formulario para registro en el sitio-->
  <section class="form-login-section">
    <div class="d-flex flex-column justify-content-center align-items-center mb-5" id="justificar">
      <!--manda por action por php los datos para registro en BD-->
      <form class="col-lg-5" id="frmForget" name="frmForget" method="post">
        <div class="text text-center mb-3">
          <h1><b>¿Olvido su contraseña?</b></h1>
        </div>
        <div class="login">
          <p><label for="txt-email">Correo Electronico</label></p>
          <p class="error" id="alert-form"></p>
          <?php if(!empty($success_message)) { ?>
                    <div class="success_message"><?php echo $success_message ?>
                    <?php } ?>
                    <?php if(isset($error_message)) { ?> 
                    <div class="error_message"><?php echo $error_message; ?></div>
                    <?php } ?>
          <input name="user-email" id="txt-email"class="form-control bg-gray-main-dark-mode" type="email" >
          <input role="button" class="btn btn-outline-info"  type="submit" value="Restablecer" name="forget-password" id="forget-password">
        </div>
        <div class="text text-center mb-3">
          <p>¿Ya tienes una cuenta? <a href="nuevo-iniciar-sesion.html" class="Registrate">Iniciar sesión</a></p>
        </div>
      </form>
    </div>
    <script src="./js/check.js"></script>
  </section>
  <script>
        $(function() {
                $(document).on('keydown', 'body', function(event) {
                    if(event.keyCode==112){ //F1
                        event.preventDefault();
                        window.location.href = "Manual de Usuario StayFitness.pdf";
                    }
                });
            });
      </script>
</body>