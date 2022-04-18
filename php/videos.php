<?php
//este archivo solamente es de uso de administador para
//el insertar los datos en la tabla de videos

//conexion con la base de datos y el servidor
$link = mysqli_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
mysqli_select_db($link,"bd_fitness") or die("<h2>Error de Conexion</h2>");

   
    $insertar = "INSERT INTO `videos`(`id`, `nombre`, `url`, `categoria`, `subcategoria`) 
    VALUES ('?','Subir19','https://www.youtube.com/embed/mL9XRuGZBE0',
    'Ejercicios para mantenerte en tu peso','flexibilidad
')";

    $resul = mysqli_query($link, $insertar);

    if ($resul){
   
        echo "
		<script>
            alert('Registro Exitoso');
    	</script>
		 
		 "; 
                   }



?>