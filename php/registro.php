<?php

require_once("conectar.php");

if ($stmt = $link->prepare("INSERT INTO registros (email, contraseña, nombre, edad) VALUES (?, ?, ?, ?)"))
{
      $email = $_POST['email'];
	  $contraseña = $_POST['contraseña'];
	  $nombre = $_POST['nombre'];
	  $edad = $_POST['edad'];
	  $options = array("cost"=>4);
	  $hashPassword = password_hash($contraseña,PASSWORD_BCRYPT,$options);
            
      $stmt->bind_param("sssd", $email, $hashPassword, $nombre, $edad);
	    $stmt->execute();
  
 if (!$stmt->error){
   
        echo "
		<script>
            alert('Registro Exitoso');
            location.href='../iniciar-sesion.html';
    	</script>
		 
		 "; 
                   }
}

?>