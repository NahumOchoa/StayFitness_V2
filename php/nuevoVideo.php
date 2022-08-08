<?php

session_start();
include "conectar.php";

$nombre = $_SESSION['nombre'];
if(!isset($nombre)){
  header("location:../nuevo-iniciar-sesion.html");
}
//verify only admin user to join here
if (strcmp($nombre, "admin") != 0 ) {
  header("location:../php/usuario.php");
}
 //extraer los datos del usuario que se tiene dentro de la variable sesion
$consulta = "SELECT * FROM registros WHERE nombre = '$nombre'";
$ejecutar = $link->query($consulta);
$extraer = $ejecutar->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--estilos-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style-usuario.css">
    <link rel="stylesheet" href="../css/nuevoVideo.scss">
    <link rel="shortcut icon" href="../img/logostayfitnessblanco.png" type="image/x-icon">
    <link rel="" href="iniciar-sesion.php">


    <title>Agregar Video | StayFitness</title>
    <script language="javascript" type="text/javascript">
          /**
      Select options object for categoria and subcategoria select elements and relationship
      */
      const selectOptions = [
          {
              name: "Ejercicios para subir de peso",
              subcategorias: [
                  "Aumento de masa corporal",
              ],
          },
          {
              name: "Ejercicios para bajar de peso",
              subcategorias: [
                  "Cardio",
              ],
          },
          
          {
              name: "Ejercicios para mantenerte en tu peso",
              subcategorias: [
                  "Tonificar",
                  "Flexibilidad",
              ],
          }
      ];


      /**
      Create an option element
      @param {string} value - Option value
      @return {Element} - option element
      */
      function createOption(value) {
          const opt = document.createElement('option');
          const textNode = document.createTextNode(value);
          opt.appendChild(textNode);
          opt.value = value;
          return opt;
      }

      /**
      Create options with Select
      @param {string} selectId - parent of options
      @param {array} options - arrays of options
      */
      function createOptionsSelect(selectId, options) {
          const select = document.getElementById(selectId);

          // clear all previous options 
          select.innerHTML = '';
          
          for(let i=0;i<options.length;i++) {
              select.appendChild(options[i]);
          }    
      }

      /**
       * Retrieve categoria values from selectOptions
       * @return {array} categoria values
       */
      function getSelectOptionscategorias() {
          return selectOptions.map(value => value.name);
      }

      /**
       * Retrieve subcategorias - values from selectOptions
       * @param {string} categoria - selected categoria
       * @return {array} - categoria subcategorias
       */
      function getSelectOptionsSubcategorias(categoria) {
          return selectOptions
                  .filter(value => value.name===categoria)
                  .map(val => val.subcategorias)[0];
      }

      /**
       * Create select id=categoria with all the categoria options
       */
      function createCategoriaSelect() {
          const categorias = getSelectOptionscategorias();
          const categoriaOptions = categorias.map(categoria => createOption(categoria));
          createOptionsSelect('categoria', categoriaOptions);
      }

      /**
       * Create select id=categoria with all the subcategoria options
       */
      function createCategoriaSelect() {
          const categorias = getSelectOptionscategorias();
          const options = categorias.map(categoria => createOption(categoria));
          createOptionsSelect('categoria', options);
      }

      /**
       * Create select id=subcategoria with all the subcategoria options
       * @param {string} categoriaId - selected categoria Id
       */
      function createSubcategoriaSelect(categoriaId) {
          const subcategorias = getSelectOptionsSubcategorias(categoriaId);
          const options = subcategorias.map(subcategoria => createOption(subcategoria));
          createOptionsSelect('subcategoria', options);
      }

      /**
       * onChange event trigger for categoria select 
       */
      function onSelectCategoria() {
          const selectedCategoria = document.getElementById('categoria').value;
          createSubcategoriaSelect(selectedCategoria);
      }

      /**
       * onload callback
       */
      function init() {
          // Default categoria select
          const selectedCategoriaDefault = 'Ejercicios para subir de peso';

          // console.log(getSelectOptionscategorias());
          // console.log(getSelectOptionsSubcategorias('categoria3'));

          document.getElementById('categoria').addEventListener('change', (e) => onSelectCategoria(e), false);

          createCategoriaSelect();
          createSubcategoriaSelect(selectedCategoriaDefault);
      }

      onload = init;

	  </script>
    
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
        <li class="nav-item link-li" id="w">
          <a class="nav-link link-a fs-5" href="#">BIENVENIDO <?php 
          echo $nombre?>
          </a>
        </li>
                    
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
  
  <!--Seccion del formulario para registro en el sitio-->
  <section class="form-login-section">
    <div class="d-flex flex-column justify-content-center align-items-center mb-5" id="justificar">
      <!--manda por action por php los datos para registro en BD-->
      <form class="col-lg-5" action="../php/videos.php" method="POST">
        <div class="text text-center mb-3">
        <h2 style="text-align: center;">Agregar Video Nuevo</h2>
        </div>
        <div class="login">
          
          <p><label for="txt-email">Categoria</label></p>
          <p class="error" id="alert-form"></p>
          <div class="select">
          <select id="categoria" name="categoria">
          
        </select></div>
          <p><label for="txt-password">Subcategoria</label></p>
          <p class="error" id="alert-form2"></p>
          <div class= "select">
          <select id="subcategoria" name="subcategoria">
          
        </select>
        </div>
          <p><label for="txt-name">URL</label></p>
          <p class="error" id="alert-form3"></p>
          <input id="txt-url"  class="form-control bg-gray-main-dark-mode" type="url" name="url" required>
          <input role="button" class="btn btn-outline-info"  type="submit" value="Agregar">
        </div>
      </form>
    </div>
    <script src="../js/checkvideo.js"></script>
  </section>
  <script>
    
  </script>

</body>
</html>