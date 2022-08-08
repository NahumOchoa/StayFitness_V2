<?php

session_start();
//conexion con la base de datos y el servidor
$link = mysqli_connect("localhost","root","") or die(header ("Location: ../error.html"));
mysqli_select_db($link,"bd_fitness") or die(header ("Location: ../error.html"));


      $nombre = $_SESSION['nombre'];

 //extraer los datos del usuario que se tiene dentro de la variable sesion
      $consulta = "SELECT * FROM registros WHERE nombre = '$nombre'";
      $ejecutar = $link->query($consulta);
      $extraer = $ejecutar->fetch_assoc();

      
      $prueba = $_POST['eliminar'];

      foreach ($prueba as &$intervalo) {
        $delete = "DELETE FROM registrosimc WHERE id=$intervalo";
        $resul = mysqli_query($link, $delete);
      }
      
      //finalmente, inserta los datos en registrosimc
     if ($ejecutar){
   
        echo "
		<script>
            alert('Eliminacion Exitosa $prueba[0], $nombre');
            location.href='usuario.php';
    	      </script>
		 
		 "; 
                   }
                   


?>