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
    <link rel="stylesheet" href="../css/style-usuario.css">
    <link rel="stylesheet" href="../css/calendar.css">
    <link rel="stylesheet" href="../css/imc.css">
    <link rel="" href="iniciar-sesion.php">
    <title>StayFitness</title>
</head>

<body>

<!--Sección de menu-->
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

<!--Banner con datos personales-->
    <header class="banner">
        <div class="nombre">
            <h1>STAYFITNESS</h1>
        </div>    
    </header>

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
    </div>
  </div>
<script src="../js/imc-script.js"></script>


<!--Contenido de Desarrollo de Pagina-->
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

<!--Registro de cambios de IMC-->
<table id="progreso">
  <caption><h2>Tabla de progreso</h2></caption>
		<tr>
      <td><b>Fecha</b></td>
			<td><b>Altura</b></td>
			<td><b>Peso</b></td>
			<td><b>Estado corporal y resultado de IMC</b></td>
		</tr>

		<?php 
    require_once("conectar.php");
		$sql= "SELECT * FROM registrosimc WHERE nombre ='".$nombre."'";
		$result=mysqli_query($link,$sql);

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