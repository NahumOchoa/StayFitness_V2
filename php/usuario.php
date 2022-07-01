<?php

session_start();
include "conectar.php";

$nombre = $_SESSION['nombre'];
if(!isset($nombre)){
  header("location:../iniciar-sesion.html");
}
 //extraer los datos del usuario que se tiene dentro de la variable sesion
$consulta = "SELECT * FROM registros WHERE nombre = '$nombre'";
$ejecutar = $link->query($consulta);
$extraer = $ejecutar->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--estilos-->
    <link rel="stylesheet" href="../css/style-usuario.css">
    <link rel="stylesheet" href="../css/calendar.css">
    <link rel="stylesheet" href="../css/imc.css">
    <link rel="" href="iniciar-sesion.php">
    <title>StayFitness</title>
</head>

<body>

<!--Sección de menu-->
<<<<<<< Updated upstream
<nav>
    <img src="../img/logostayfitnessblanco.png">
    <ul id="menu">
      <li><a href="usuario.php">HOME</a></li>
      <li><a href="ejercicios.php">EJERCICIOS</a></li>
      <li><a href="cerrar-sesion.php">CERRAR SESIÓN</a></li>
      <li id="w" href="">BIENVENIDO <?php 
                echo $nombre?>
      </li>
    </ul>
  </nav>
=======
<nav class="navbar navbar-expand-md p-0">
        <div class="container-fluid mx-3 ">
                <a class="navbar-brand" href="../index.html">
                    <img src="../img/logostayfitnessblanco.png">    
                </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav align-content-center">
                    <li class="nav-item link-li"><a class="nav-link link-a fs-5" href="ejercicios.php">EJERCICIO</a></li>
                    <li class="nav-item link-li"><a class="nav-link link-a fs-5" href="cerrar-sesion.php">CERRAR SESIÓN</a></li>
                    <li class="nav-item link-li" id="w"><a class="nav-link link-a fs-5" href="#">BIENVENIDO <?php 
                              echo $nombre?></a></li>
                    
                    </li>
                </ul>

            </div>
            
        </div>
    </nav>    
    
  
>>>>>>> Stashed changes

<!--Banner con datos de sitio-->
    <header class="banner">
        <div class="nombre">
            <h1>STAYFITNESS</h1>
        </div>    
    </header>

    <!--Contenido de Desarrollo de Pagina-->

  <!--Calculo IMC y se envian los datos en un form a su tabla de datos-->
<<<<<<< Updated upstream
  <div class="calcular-imc">
    <div id="container-imc">
      <h2 class="login-header">Calcula tu IMC (índice de masa corporal)</h2>

      <form name="IMC" action="imc.php" method="POST">
        <p>Escribe tu PESO actual (kg):
        <input type="text" name="peso" id="peso" size="3" maxlength="3" required="required">
        </p>

        <p>Escribe tu ALTURA actual (cm):
        <input type="text" name="altura"value="" id="altura" size="3" maxlength="3" required="required">
        </p>
        <input type="button" id="guardar" value="Calcular IMC" onclick="calcularIMC();">
        <br>
        <p id="imc">Resultado
        <input type="text" name="resultado" id="resultado" size="65">
        <br>
        </p>
        <input type="submit" id="guardar" value="Guardar resultados">
      </form>
=======
  <section class="container justify-content-center mt-5">
    <div class="calcular-imc">
      <div id="container-imc">
        <div class=" d-flex flex-column justify-content-center align-items-center" id="justificar">
                <form name = "IMC" action="imc.php"method="POST">
                    <div class = "text text-center mb-3">
                        <h1><b>Calcula tu IMC</b><br>(índice de masa corporal)</h1>
                        <h2>Tu IMC: </h2>
                        <h3 name="resultado2" id="resultado2" size="65"></h3>
                        <input type="hidden" name="resultado" id="resultado" size="50" >
                        
                    </div>
                    <div class = "login">
                        <p>Escribe tu PESO actual (kg)</p>
                        <input type="text" class="form-control bg-gray-main-dark-mode" name="peso" id="peso" size="3" maxlength="3" required="required">
                        <p>Escribe tu ALTURA actual (cm):</p>
                        <input type="text" class="form-control" name="altura"value="" id="altura" size="3" maxlength="3" required="required">
                        <input type="button" class="btn btn-primary" id="guardar" value="Calcular IMC" onclick="calcularIMC();">
                        <input  disabled="true"class = "btn btn-primary"type="submit" name="guardar2" id="guardar2" value="Guardar resultados">
                        
                    </div>
                </form>
        </div>
      </div>
>>>>>>> Stashed changes
    </div>
  </div>
<script src="../js/imc-script.js"></script>


<!--implementacion del calendario designado para el ingreso de actividades fisicas-->
<div class="calendario">
<div id="container">
  <div><h2 align="center">Calendario de actividades físicas</h2></div>

    <div id="header">
      <div id="monthDisplay"></div>
      <div>
        <button id="backButton">Anterior</button>
        <button id="nextButton">Siguiente</button>
      </div>
    </div>

    <div id="weekdays">
      <div>Domingo</div>
      <div>Lunes</div>
      <div>Martes</div>
      <div>Miércoles</div>
      <div>Jueves</div>
      <div>Viernes</div>
      <div>Sábado</div>
    </div>

    <div id="calendar"></div>
  </div>

  <div id="newEventModal">
    <h2>Ejercicio realizado</h2>

    <input id="eventTitleInput" placeholder="Ejercicio realizado" />

    <button id="saveButton">Guardar</button>
    <button id="cancelButton">Cancelar</button>
  </div>

  <div id="deleteEventModal">
    <h2>Ejercicio</h2>

    <p id="eventText"></p>

    <button id="deleteButton">Eliminar</button>
    <button id="closeButton">Cerrar</button>
  </div>

  <div id="modalBackDrop"></div>

  <script src="../js/calendar-script.js"></script>
</div>

<!--Tabla de progreso de IMC-->
<table id="progreso">
  <caption><h2>Tabla de progreso</h2></caption>
		<tr>
      <td><b>Fecha</b></td>
			<td><b>Altura</b></td>
			<td><b>Peso</b></td>
			<td><b>Estado corporal y resultado de IMC</b></td>
		</tr>

		<?php 
    //se obtienen los datos requeridos de la tabla
    require_once("conectar.php");
		$sql= "SELECT * FROM registrosimc WHERE nombre ='".$nombre."'";
		$result=mysqli_query($link,$sql);
    //se muestran los datos en esta tabla
		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
      <td><?php echo $mostrar['fecha'] ?></td>
			<td><?php echo $mostrar['altura'] ?></td>
			<td><?php echo $mostrar['peso'] ?></td>
			<td><?php echo $mostrar['resultado'] ?></td> 
		</tr>
	<?php 
	}
	 ?>
	</table>

<!--Sección de pie de página-->
    <footer id="contacto">
        <img src="../img/logostayfitnessblanco.png">
        <a href="ayuda.php"><h3 class="ayuda">AYUDA</h3></a>
        <h3>REDES SOCIALES</h3>
        <ul class="redes">
            <li><a href="https://www.instagram.com/stayfitness4/?hl=es-la" target="_blank"><img src="../img/redes-sociales/instagram.png" alt=""></a></li>
            <li><a href="https://vm.tiktok.com/ZTdU2C36b/" target="_blank"><img src="../img/redes-sociales/tiktok.png" alt=""></a></li>
        </ul>
    </footer>
</body>
</html>