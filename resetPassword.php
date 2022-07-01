<?php
require_once 'inc/dbconnection.php';
    if(isset($_POST["reset-password"])){
        $name = $_GET["name"];
        $password = trim($_POST["password"]);
        $confirmPassword = trim($_POST["confirmPassword"]);
        if($password == $confirmPassword) {
           $password = password_hash($password, PASSWORD_DEFAULT); 
           $stmt = $db->prepare("UPDATE registros SET contraseña = ? WHERE nombre = ?");
           $stmt->execute(array($password,$name));
           $affected_rows = $stmt->rowCount();
           if($affected_rows) {
               $success_message = "Contraseña restablecida correctamente.<br>Redirigiendo...";
               header("Refresh:3; url=index.html");
           } else {
               $error_message = "Error : <br> La contraseña no se actualizo";
           }
        } else {
            $error_message = "Las contraseñas no son iguales";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña | StayFitness</title>
    <!--estilos-->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style-iniciar-sesion.css">
    <link rel="stylesheet" href="css/style-iniciar-sesion.css">
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
                  <li class="nav-item link-li"><a class="nav-link link-a fs-5" href="index.html">INICIO</a></li>
              </ul>
          </div>
      </div>
  </nav> 
  
  <!--Seccion del formulario para registro en el sitio-->
  <section class="form-login-section">
    <div class="d-flex flex-column justify-content-center align-items-center mb-5" id="justificar">
      <!--manda por action por php los datos para registro en BD-->
      <form class="col-lg-5" id="reserPassword" name="reserPassword" method="post">       
      <div class="text text-center mb-3">
          <h1><b>Restablecer Contraseña</b></h1>
        </div>
        <div class="login">          
          <p><label for="txt-password">Nueva Contraseña</label></p>
          <input id="password" class="form-control bg-gray-main-dark-mode" type="password" name="password" required minlength="8">
          <p><label for="txt-password">Confirmar Contraseña</label></p>
          <input id="confirmPassword" class="form-control bg-gray-main-dark-mode" type="password" name="confirmPassword" required minlength="8">
          <?php if(!empty($success_message)) { ?>
                <div class="success_message"><?php echo $success_message ?></div>
                <?php } ?>
                <?php if(!empty($error_message)) { ?>
                <div class="error_message"><?php echo $error_message ?></div>
                <?php } ?> 
          <input role="button" class="btn btn-outline-info"  type="submit" value="Restablecer" name="reset-password" id="reset-password">
        </div>        
      </form>
    </div>
  </section>

</body>
</html>