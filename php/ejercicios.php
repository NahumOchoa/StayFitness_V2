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
    <link rel="shortcut icon" href="../img/logostayfitnessblanco.png" type="image/x-icon">
    <link rel="" href="iniciar-sesion.php">
    <title>Ejercicios | StayFitness</title>
</head>

<body>

<!--Sección de menu-->
<nav class="navbar navbar-expand-md p-0">
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
                    <li class="nav-item link-li" id="w"><a class="nav-link link-a fs-5" href="#">BIENVENIDO <?php 
                              echo $nombre?></a></li>
                    
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
    <div class="accordion">
    
      <div class="categoria">
        <p>EJERCICIOS PARA SUBIR DE PESO</p>
  
      </div>
      
      <div class="url">
        <h3>Aumento de masa corporal</h3>
        <!--Video 1-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir1'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> > 
          
        <!--Video 2-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir2'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >

        <!--Video 3-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir3'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >

        <!--Video 4-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir4'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >
        
      </div>
    </div>
  
    <div class="accordion">
      <div class="categoria">
        <p>EJERCICIOS PARA BAJAR DE PESO</p>
  
      </div>
      <div class="url">
        <h3>Cardio</h3>
        <!--Video 1-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir5'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> > 
          
        <!--Video 2-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir6'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >

        <!--Video 3-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir7'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >

        <!--Video 4-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir8'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >
        
      </div>
    </div>

    <div class="accordion">
      <div class="categoria">
        <p>EJERCICIOS PARA MANTENERTE EN TU PESO</p>
  
      </div>
      <div class="url">
        <h3>Tonificar</h3>
        <!--Video 1-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir9'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> > 
          
        <!--Video 2-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir10'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >

        <!--Video 3-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir11'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >

        <!--Video 4-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir12'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >

        <!--Video 5-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir13'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >

        <!--Otra subcategoria-->
        <h3>Flexibilidad</h3>
        <!--Video 1-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir15'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> > 
          
        <!--Video 2-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir16'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >

        <!--Video 3-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir17'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >

        <!--Video 4-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir18'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >

        <!--Video 5-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir19'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >
        
      </div>
    </div>
</div>

<!--script de funcionamiento de despliegue-->
  <script>
    let answers=document.querySelectorAll(".accordion");
    answers.forEach((event)=>{
        event.addEventListener('click',()=>{
            if(event.classList.contains("active")){
                event.classList.remove("active");
            }
            else{
                event.classList.add("active");
            }
        })
    });
  

</script>

<!--Sección de pie de página-->
<footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap">
        <p class="fs-5 px-3  pt-3">STAYFITNESS. &copy; Todos Los Derechos Reservados 2022</p>
        <a href="#"><i class="bi bi-instagram"></i></a>  
    </footer>


</body>
</html>