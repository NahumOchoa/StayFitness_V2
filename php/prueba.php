<?php

//llama a conectar de base de datos
require_once("conectar.php");

//inserta los datos obtenidos del formulario en la tabla de registros
if ($stmt = $link->prepare("INSERT INTO registros (email, contraseña, nombre, edad) VALUES (?, ?, ?, ?)"))
{   
    for ($i = 1; $i <= 1000; $i++) {
        $email = $i."@gmail.com";
	  $contraseña = "password";
	  $nombre = $i;
	  $edad = 20;
	  $options = array("cost"=>4);
	  //se encripta la contraseña del usuario
	  $hashPassword = password_hash($contraseña,PASSWORD_BCRYPT,$options);
            
      $stmt->bind_param("sssd", $email, $hashPassword, $nombre, $edad);
	    $stmt->execute();
    }
	
 if (!$stmt->error){
   
        echo "
		<script>
            alert('Registro Exitoso');
            location.href='../nuevo-iniciar-sesion.html';
    	</script>
		 
		 "; 
                   }
}

?>