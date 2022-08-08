<?php

session_start();
include "conectar.php";

$nombre = $_SESSION['nombre'];
if(!isset($nombre)){
  header("location:../nuevo-iniciar-sesion.html");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style-usuario.css">
    <link rel="stylesheet" href="../css/ejercicios.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="shortcut icon" href="../img/logostayfitnessblanco.png" type="image/x-icon">
    <link rel="" href="iniciar-sesion.php">
    <title>Ejercicios | StayFitness</title>
</head>

<body>

<!--Sección de menu-->
<nav class="navbar navbar-expand-md p-0">
<<<<<<< Updated upstream
        <div class="container-fluid mx-3 ">
                <a class="navbar-brand" href="../index.html">
                    <img  alt="logo-StayFitness" src="../img/logostayfitnessblanco.png">    
                </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav align-content-center">
                    <li class="nav-item link-li">
                        <a class="nav-link link-a fs-5" href="../index.html">INICIO</a>
                    <li class="nav-item link-li"><a class="nav-link link-a fs-5" href="usuario.php">USUARIOS</a></li>
                    <li class="nav-item link-li"><a class="nav-link link-a fs-5" href="cerrar-sesion.php">CERRAR SESIÓN</a></li>
                    <li class="nav-item link-li" id="w"><a class="nav-link link-a fs-5" href="#">BIENVENIDO <?php 
                              echo $nombre?></a></li>
=======
  <div class="container-fluid mx-3 ">
    <a class="navbar-brand" href="../index.html">
      <img src="../img/logostayfitnessblanco.png">    
    </a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav align-content-center">
      <li class="nav-item link-li">
        <a class="nav-link link-a fs-5" href="../index.html">INICIO</a>
        <li class="nav-item link-li"><a class="nav-link link-a fs-5" href="usuario.php">USUARIOS</a></li>
        <li class="nav-item link-li"><a class="nav-link link-a fs-5" href="cerrar-sesion.php">CERRAR SESIÓN</a></li>
        <li class="nav-item link-li" id="w">
          <a class="nav-link link-a fs-5" href="#">BIENVENIDO <?php 
          echo $nombre?>
          </a>
        </li>
>>>>>>> Stashed changes
                    
      </ul>

    </div>
            
  </div>
</nav>    

<!--Banner con datos de sitio-->
    <header class="banner">
        <div class="nombre">
            <h1>STAYFITNESS</h1>
        </div>    
    </header>
  
    
    
</div>

  


  <div class="carousel-item">
   <div class="row">
     <div class="col"><p>hola</p></div>
     <div class="col"><p>que hay</p></div>
     <div class="col">slide 3</div>
     <div class="col">slide 4</div>
   </div>
</div>
  
<!--Contenido de Desarrollo de seccion de ejercicios-->
<h2 style="text-align: center;">EJERCICIOS QUE DEBES REALIZAR</h2>

  <div class="layout">
    <!-- EJERCICIOS PARA SUBIR DE PESO-->
    <?php 
        if (strcmp($nombre, "admin") == 0 ) {        
          echo '<a type="button" name="add" class="btn btn-success" href="../php/nuevoVideo.php"> Agregar Video</a>';
        }
        ?>
    <div class="accordion categoria">    
      <!--<div class="categoria">-->
        <p>EJERCICIOS PARA SUBIR DE PESO</p>
  
      <!--</div>-->
      
      <div class="url">
        <!--Videos Aumento de masa corporal-->
        
        <h3>Aumento de masa corporal</h3>
<<<<<<< Updated upstream
        <!--Video 1-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir1'";
          $result=mysqli_query($link,$sql);
          if(!$result){
            header("Location: ../error.html");
          }
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> > 
          
        <!--Video 2-->
        <p <?php 
=======
        <?php 
>>>>>>> Stashed changes
          require_once("conectar.php");
          $sql= "SELECT * FROM `videos` WHERE `subcategoria`= 'increase-b-mass' ORDER BY `id`";
          $result = mysqli_query($link, $sql);

          if (!$result)
          {
            echo 'Error Message: ' . mysqli_error($connect) . '<br>';
            exit;
          }

          // Display the number of records found, this is for testing, if you're not testing please toggle line comment 
          echo '<p>The query found ' . mysqli_num_rows($result) . ' rows</p>';

          /*if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
            }
          }  */
          $result=mysqli_query($link,$sql);
          //cycle to display videos and buttons
          while ($record = mysqli_fetch_assoc($result))
          {
            echo '<p><iframe width="560" height="315" src="https://www.youtube.com/embed/'.$record['url'].'?modestbranding=1" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen></iframe>';
            if (strcmp($nombre, "admin") == 0 ) {              
              echo '</br><a name="Button" type="button" class="btn btn-danger" href="../php/delete.php?id='.$record['id'].'"> ELIMINAR </a>';
              //echo '</br><button name="Button" type="button" class="btn btn-danger" data-target="#modal_confirm'.$record['id'].'" data-toggle="modal">Delete</button>';
              ?>
              <!--
              <div class="modal fade" id="modal_confirm<?php// echo $record['id']?>" aria-hidden="true">
						    <div class="modal-dialog">
							    <div class="modal-content">
								    <div class="modal-header">
									    <h3 class="modal-title">System</h3>
								    </div>
								    <div class="modal-body">
									    <center><h4>Are you sure you want to delete this data?</h4></center>
								    </div>
								    <div class="modal-footer">
									    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
									    <a type="button" class="btn btn-success" href="../php/delete.php?id=<?php// echo $record['id']?>">Yes</a>
								    </div>
							    </div>
						    </div>
					    </div>
            -->
            <?php
            }            
            echo '</p>';         
          }
          ?>  
        
      </div>
    </div>
  <!--EJERCICIOS PARA BAJAR DE PESO-->
    <div class="accordion">
      <div class="categoria">
        <p>EJERCICIOS PARA BAJAR DE PESO</p>
  
      </div>
      <div class="url">
        <h3>Cardio</h3>
        <!--Video 1-->
        <?php 
          require_once("conectar.php");
          $sql= "SELECT * FROM `videos` WHERE `subcategoria`= 'cardio' ORDER BY `id`";
          $result = mysqli_query($link, $sql);

          if (!$result)
          {
            echo 'Error Message: ' . mysqli_error($connect) . '<br>';
            exit;
          }

          // Display the number of recirds found
          echo '<p>The query found ' . mysqli_num_rows($result) . ' rows:</p>';

          /*if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
            }
          }  */
          $result=mysqli_query($link,$sql);
          while ($record = mysqli_fetch_assoc($result))
          {
            echo '<p><iframe width="560" height="315" src="https://www.youtube.com/embed/'.$record['url'].'?modestbranding=1" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen></iframe>';
            if (strcmp($nombre, "admin") == 0 ) {              
              echo '</br><a name="Button" type="button" class="btn btn-danger" href="../php/delete.php?id='.$record['id'].'"> ELIMINAR </a>';
              //echo '</br><button name="Button" type="button" class="btn btn-danger" data-target="#modal_confirm'.$record['id'].'" data-toggle="modal">Delete</button>';
              ?>
              <!--
              <div class="modal fade" id="modal_confirm<?php// echo $record['id']?>" aria-hidden="true">
						    <div class="modal-dialog">
							    <div class="modal-content">
								    <div class="modal-header">
									    <h3 class="modal-title">System</h3>
								    </div>
								    <div class="modal-body">
									    <center><h4>Are you sure you want to delete this data?</h4></center>
								    </div>
								    <div class="modal-footer">
									    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
									    <a type="button" class="btn btn-success" href="../php/delete.php?id=<?php// echo $record['id']?>">Yes</a>
								    </div>
							    </div>
						    </div>
					    </div>
            -->
            <?php
            }            
            echo '</p>';         
          }
          ?>  
        
      </div>
    </div>
  <!--EJERCICIOS PARA MANTENERTE EN TU PESO-->
    <div class="accordion">
      <div class="categoria">
        <p>EJERCICIOS PARA MANTENERTE EN TU PESO</p>
  
      </div>
      <div class="url">
        <h3>Tonificar</h3>
        <!--Video 1-->
        <?php 
          require_once("conectar.php");
          $sql= "SELECT * FROM `videos` WHERE `subcategoria`= 'tone-body' ORDER BY `id`";
          $result = mysqli_query($link, $sql);

          if (!$result)
          {
            echo 'Error Message: ' . mysqli_error($connect) . '<br>';
            exit;
          }

          // Display the number of recirds found
          echo '<p>The query found ' . mysqli_num_rows($result) . ' rows:</p>';

          /*if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
            }
          }  */
          $result=mysqli_query($link,$sql);
          while ($record = mysqli_fetch_assoc($result))
          {
            echo '<p><iframe width="560" height="315" src="https://www.youtube.com/embed/'.$record['url'].'?modestbranding=1" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen></iframe>';
            if (strcmp($nombre, "admin") == 0 ) {              
              echo '</br><a name="Button" type="button" class="btn btn-danger" href="../php/delete.php?id='.$record['id'].'"> ELIMINAR </a>';
              //echo '</br><button name="Button" type="button" class="btn btn-danger" data-target="#modal_confirm'.$record['id'].'" data-toggle="modal">Delete</button>';
              ?>
              <!--
              <div class="modal fade" id="modal_confirm<?php// echo $record['id']?>" aria-hidden="true">
						    <div class="modal-dialog">
							    <div class="modal-content">
								    <div class="modal-header">
									    <h3 class="modal-title">System</h3>
								    </div>
								    <div class="modal-body">
									    <center><h4>Are you sure you want to delete this data?</h4></center>
								    </div>
								    <div class="modal-footer">
									    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
									    <a type="button" class="btn btn-success" href="../php/delete.php?id=<?php// echo $record['id']?>">Yes</a>
								    </div>
							    </div>
						    </div>
					    </div>
            -->
            <?php
            }            
            echo '</p>';         
          }
          ?>

        <!--Flexibilidad subcategoria-->
        <h3>Flexibilidad</h3>
        <!--Videos-->
        <?php 
          require_once("conectar.php");
          $sql= "SELECT * FROM `videos` WHERE `subcategoria`= 'flex' ORDER BY `id`";
          $result = mysqli_query($link, $sql);

          if (!$result)
          {
            echo 'Error Message: ' . mysqli_error($connect) . '<br>';
            exit;
          }

          // Display the number of recirds found
          echo '<p>The query found ' . mysqli_num_rows($result) . ' rows:</p>';

          /*if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
            }
          }  */
          $result=mysqli_query($link,$sql);
          while ($record = mysqli_fetch_assoc($result))
          {
            echo '<p><iframe width="560" height="315" src="https://www.youtube.com/embed/'.$record['url'].'?modestbranding=1" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen></iframe>';
            if (strcmp($nombre, "admin") == 0 ) {              
              echo '</br><a name="Button" type="button" class="btn btn-danger" href="../php/delete.php?id='.$record['id'].'"> ELIMINAR </a>';
              //echo '</br><button name="Button" type="button" class="btn btn-danger" data-target="#modal_confirm'.$record['id'].'" data-toggle="modal">Delete</button>';
              ?>
              <!--
              <div class="modal fade" id="modal_confirm<?php// echo $record['id']?>" aria-hidden="true">
						    <div class="modal-dialog">
							    <div class="modal-content">
								    <div class="modal-header">
									    <h3 class="modal-title">System</h3>
								    </div>
								    <div class="modal-body">
									    <center><h4>Are you sure you want to delete this data?</h4></center>
								    </div>
								    <div class="modal-footer">
									    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
									    <a type="button" class="btn btn-success" href="../php/delete.php?id=<?php// echo $record['id']?>">Yes</a>
								    </div>
							    </div>
						    </div>
					    </div>
            -->
            <?php
            }            
            echo '</p>';         
          }
          ?>
        
      </div>
    </div>
</div>

<!--FORM PARA AGREGAR NUEVO VIDIO-->
<!--<div class="modal fade" id="form_modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="save.php">
					<div class="modal-header">
						<h3 class="modal-title">Add Member</h3>
					</div>
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Firstname</label>
								<input type="text" name="firstname" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Lastname</label>
								<input type="text" name="lastname" class="form-control" required="required" />
							</div>
							<div class="form-group">
								<label>Address</label>
								<input type="text" name="address" class="form-control" required="required"/>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
						<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
      -->
  <!--script de funcionamiento de despliegue-->
  <script>
    let answers=document.querySelectorAll(".accordion");
    answers.forEach((event)=>{

      event.addEventListener('click',function(e){
        if(e.target !== this){
          return;
        }
        if(event.classList.contains("active")){
          event.classList.remove("active");
        }
        else{
          event.classList.add("active");
        }
      })
    });
  

</script>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.js"></script>

<!--Sección de pie de página-->
<footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap">
        <p class="fs-5 px-3  pt-3">STAYFITNESS. &copy; Todos Los Derechos Reservados 2022</p>
        <a href="#"><i class="bi bi-instagram"></i></a>  
    </footer>


</body>
</html>