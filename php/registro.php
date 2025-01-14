<?php

//llama a conectar de base de datos
require_once("conectar.php");

//inserta los datos obtenidos del formulario en la tabla de registros
if ($stmt = $link->prepare("INSERT INTO registros (email, contraseña, nombre, edad) VALUES (?, ?, ?, ?)"))
{
	//obtiene los datos en variables
    $email = $_POST['email'];
	$contraseña = $_POST['contraseña'];
	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];
	$options = array("cost"=>4);
	//se encripta la contraseña del usuario
	$hashPassword = password_hash($contraseña,PASSWORD_BCRYPT,$options);
            
    $stmt->bind_param("sssd", $email, $hashPassword, $nombre, $edad);
	$stmt->execute();
  
	//finalmente, si los datos se consiguen correctamente y no
	//muestra error el registro es existoso
 	if (!$stmt->error){
   
        echo "
		<script>
            alert('Registro Exitoso');
            location.href='../nuevo-iniciar-sesion.html';
    	</script>
		 
		 "; 
    }elseif($stmt->error == "Duplicate entry '$email' for key 'email'"){
		echo "
		<script>
            alert('Error al registrar, el email: $email ya existe');
            location.href='../registro.html';
    	</script>
		 
		 ";
		
	}elseif($stmt->error == "Duplicate entry '$nombre' for key 'nombre'"){
		echo "
		<script>
			alert('Error al registrar, el nombre: $nombre ya existe');
			location.href='../registro.html';
		</script>
		 
		 ";
	}elseif($stmt->error){
		echo "
		<script>
			alert('Error al registrar usuario y email ya existen en la base de datos'); 
			location.href='../registro.html';
		</script>
		 
		 ";
	}
}

?>