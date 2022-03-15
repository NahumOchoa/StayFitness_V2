<?php
session_start();
require_once("conectar.php");

//VERIFICACION DE ESCRITURA DE DATOS EN EL FORM
			if ( !isset($_POST['email'], $_POST['contraseña']) )
            {
			// Could not get the data that should have been sent.
			exit('Complete correctamente los campos de email y contraseña!');
			}

//  SI SE CONECTO Y SI SE ENVIARON AMBOS DATOS SE PROCEDE CON LA CONSULTA DE EXISTENCIA DEL USUARIO EVITANDO INYECCIONES SQL ?
if ($stmt = $link->prepare('SELECT id, contraseña FROM registros WHERE email = ?'))
 {
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	$stmt->store_result();
     
     // SI EL USUARIO EXISTE EN LA TABLA SE EXTRAE Y SE APUNTA SU DNI Y SU CLAVE
     if ($stmt->num_rows > 0)
      {
		$stmt->bind_result($id, $contraseña);
		$stmt->fetch();
        
			// AHORA VERIFICA SI LA CLAVE QUE SE EXTRAJO DE LA TABLA ES IGUAL A LA QUE SE ENVIA DESDE EL FORMULARIO         
        	//if ($_POST['password'] === $clave) 
          	if(password_verify( $_POST['contraseña'],$contraseña))
        		{
                    // SI COINICIDEN AMBAS CONTRASEÑAS SE INICIA LA SESION Y SE LE DA LA BIENCENIDA AL USUARIO CON ECHO
					session_regenerate_id();
					$_SESSION['loggedin'] = TRUE;
					$_SESSION['email'] = $_POST['email'];
					$_SESSION['id'] = $id;
			        // echo 'BIENVENIDO USUARIOP : ' . $_SESSION['name'] .' CON TU DNI NUMERO : '. $_SESSION['dni'] . '!';
                    header('Location: ../usuario.html');
                   
				} 
           
       				// SI EL USUARIO EXISTE PERO EL PASSWORD NO COINCIDE IMPRIMIR EN PANTALLA PASSWORD INCORRECTO
       
                   		else { echo " 
                            <script>
                                alert('Contraseña Incorrecta');
                                location.href='../iniciar-sesion.html';
                            </script>
                            
                            "; }
       	}  
      
      
      			   // SI EL USUARIO NO EXISTE MOSTRAR USUARIO INCORRECTO
          				else { echo "  
                            <script>
                                alert('Este usuario no existe');
                                location.href='../iniciar-sesion.html';
                            </script>
                            
                            "; }

	$stmt->close();
}
?>