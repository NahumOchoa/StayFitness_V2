<?php

session_start();
//conexion con la base de datos y el servidor
$link = mysqli_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
mysqli_select_db($link,"bd_fitness") or die("<h2>Error de Conexion</h2>");


$nombre = $_SESSION['nombre'];

 //extraer los datos del usuario que se tiene dentro de la variable sesion
      $consulta = "SELECT * FROM registros WHERE nombre = '$nombre'";
      $ejecutar = $link->query($consulta);
      $extraer = $ejecutar->fetch_assoc();

      $altura = $_POST['altura'];
	$peso = $_POST['peso'];
	$resultado = $_POST['resultado'];
      $fecha = date("Y-m-d");
      $datestop=$_POST['datestop'];
    
      $insertar = "INSERT INTO `registrosimc`(`id`, `altura`, `peso`, `resultado`, `fecha`, `nombre`) VALUES ('?','$altura','$peso','$resultado','$fecha', '$nombre')";

      $resul = mysqli_query($link, $insertar);
  
     if ($resul){
   
        echo "
		<script>
            alert('Registro Exitoso');
            location.href='usuario.php';
    	</script>
		 
		 "; 
                   }


?>