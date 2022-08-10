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
    <!--estilos-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/preguntas.css">
   
    <title>StayFitness</title>
</head>

<body>

<!--Sección de menu-->
  <nav>
    <img src="../img/logostayfitnessblanco.png">
    <ul id="menu">
      <li><a href="usuario.php">INICIO</a></li>
      <li><a href="ejercicios.php">EJERCICIOS</a></li>
      <li><a href="cerrar-sesion.php">CERRAR SESIÓN</a></li>
      <li id="w" href="">BIENVENIDO <?php 
                echo $nombre?>
      </li>
    </ul>
  </nav>

<!--Banner con datos de sitio-->
    <header class="banner">
        <div class="nombre">
            <h1>STAYFITNESS</h1>
        </div>    
    </header>

<!--Contenido de Desarrollo de Pagina-->
<!--Seccion de preguntas frencuentes-->
<h2 style="text-align: center;"> PREGUNTAS FRECUENTES</h2>
  <div class="layout">
    <div class="accordion">
      <div class="accordion__question">
        <p>¿Qué beneficios tiene adquirir este producto o servicio?</p>
  
      </div>
      <div class="accordion__answer">
        <p>1) Flexibilidad en horario<br>
            2) Ahorra dinero y tiempo<br>
            3) Controlas la higiene<br>
            4) Combinación de rutinas adaptadas a ti<br>
            5) Mayor comodidad<br>
        </p>
      </div>
    </div>
  
    <div class="accordion">
      <div class="accordion__question">
        <p>¿Realmente necesito este producto o servicio?</p>
      </div>
  
      <div class="accordion__answer">
        <p>
        ¿Qué sucede entonces con quienes tenían como rutina diaria el 
        ejercicio físico asistiendo a gimnasios? Probablemente muchos 
        se han visto en la necesidad de elaborar una rutina de ejercicios 
        para poder continuar con el trabajo físico en el que estaban. 
        Pero esto no es sólo para quienes asisten a centros de ejercicios. 
        Realizar ejercicio en casa es una buena práctica para personas que 
        no hacían ejercicio previamente y quieren disfrutar de sus beneficios
        durante este período
        </p>
      </div>
    </div>

    <div class="accordion">
        <div class="accordion__question">
          <p>¿Cómo funciona?</p>
        </div>
    
        <div class="accordion__answer">
          <p>
            1. Descargá la aplicación de la tienda.<br>
            2. Abrí la aplicación. La primera vez te pedirá registrar tu peso y altura.<br>
            3. Explorá entre las opciones de rutinas y seleccioná la que te interese. Hay de cuerpo completo, para piernas, abdomen, hombros, espalda, brazos y pecho. 4. Seleccioná tu nivel entre principiante, intermedio y avanzado.<br>
            5. Empezá a ejercitarte y seguí la rutina sin trampas.<br>
          </p>
        </div>
      </div>

      <div class="accordion">
        <div class="accordion__question">
          <p>¿Es recomendable tomar agua durante la rutina?</p>
        </div>
    
        <div class="accordion__answer">
          <p>
          Tomar agua en tragos pequeños compensará la pérdida de líquido al sudar, 
          recuperar nutrientes y balancear tu metabolismo. Un mix de frutos secos, 
          yogurt griego, huevos cocidos o crema de maní con frutas, son buenas ideas 
          para evitar el desgaste muscular y la descompensación.
          </p>
        </div>
      </div>

      <div class="accordion">
        <div class="accordion__question">
          <p>¿Cuántas veces a la semana es recomendable hacer ejercicio?
          </p>
        </div>
    
        <div class="accordion__answer">
          <p>
            Depende de tus objetivos: si lo que quieres es bajar de peso la 
            recomendación es entrenar un mínimo de 5 veces a la semana; para 
            mantener un estado físico saludable, hacer deporte 3 veces a la 
            semana será suficiente.
          </p>
        </div>
      </div>

      <div class="accordion">
        <div class="accordion__question">
          <p>¿Es recomendable practicar ejercicio en ayunas?</p>
        </div>
    
        <div class="accordion__answer">
          <p>
            Si la rutina que vas a practicar es de una intensidad media o 
            moderada es muy recomendable hacer ejercicio en ayunas, porque 
            el entreno activará tu metabolismo y te ayudará a oxidar/quemar 
            mejor la grasa.
          </p>
        </div>
      </div>

      <div class="accordion">
        <div class="accordion__question">
          <p>¿Qué recomiendas para los calambres?</p>
        </div>
    
        <div class="accordion__answer">
          <p>
          Los calambres pueden darse por varios motivos, uno de los más 
          frecuentes es la deshidratación; por eso la recomendación es siempre 
          mantener una ingesta adecuada de agua durante los entrenamientos e 
          hidratarse apropiadamente después de una rutina.
          </p>
        </div>
      </div>

      <div class="accordion">
        <div class="accordion__question">
          <p>¿Cómo superar la pereza para entrenar?</p>
        </div>
    
        <div class="accordion__answer">
          <p>
          Apasiónate por los beneficios y no te obsesiones por los resultados; 
          una dieta adecuada y una rutina de entrenamientos consistente 
          transformarán tu vida y tu figura.

          </p>
        </div>
      </div>

      <div class="accordion">
        <div class="accordion__question">
          <p>¿Cuántas repeticiones hacer por cada ejercicio?</p>
        </div>
    
        <div class="accordion__answer">
          <p>
          Dependerá de tus objetivos, la carga de peso y la intensidad con la 
          que quieras entrenar; un mínimo de 16 repeticiones por cada ejercicio 
          es un buen punto de partida para medir tu resistencia y capacidad, 
          todo esto será determinado por la aplicación.
         </p>
        </div>
      </div>

      <div class="accordion">
        <div class="accordion__question">
          <p>¿Cuánto es el tiempo mínimo para una rutina de ejercicios?</p>
        </div>
    
        <div class="accordion__answer">
          <p>
          El mínimo son 40 minutos para una quema de grasa efectiva, en nuestro FB 
          Stay Fitness, encontrarás dos rutinas de aproximadamente 20 minutos cada una, 
          que puedes hacer con tus hijos para vivir un divertido momento en casa.
          </p>
        </div>
      </div>

  </div>

  <!--script de despliegue de preguntas-->
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
    })
</script>

<!--Sección de pie de página-->
    <footer id="contacto">
        <img src="../img/logostayfitnessblanco.png">
        <a href="#"><h3 class="ayuda">AYUDA</h3></a>
        <h3>REDES SOCIALES</h3>
        <ul class="redes">
            <li><a href="https://www.instagram.com/stayfitness4/?hl=es-la" target="_blank"><img src="../img/redes-sociales/instagram.png" alt=""></a></li>
            <li><a href="https://vm.tiktok.com/ZTdU2C36b/" target="_blank"><img src="../img/redes-sociales/tiktok.png" alt=""></a></li>
        </ul>
    </footer>
</body>
</html>