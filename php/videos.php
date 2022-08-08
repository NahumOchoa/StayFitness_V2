<?php
//este archivo solamente es de uso de administador para
//el insertar los datos en la tabla de videos
    require_once 'conectar.php';
    $categoria = $_POST['categoria'];
	$subcategoria = $_POST['subcategoria'];
	$url = $_POST['url'];


    echo $categoria;
    echo $subcategoria;
    echo $url;

    switch ($subcategoria) {
        case 'Aumento de masa corporal':
            $categoria = 'gain-weight';
            $subcategoria = 'increase-b-mass';            
            break;
        
        case 'Cardio':
            $categoria = 'lose-weight';
            $subcategoria = 'cardio';
            break;
                
        case 'Tonificar':
            $categoria = 'maintain-weight';
            $subcategoria = 'tone-body';
            break;
        
        case 'Flexibilidad':
            $categoria = 'maintain-weight';
            $subcategoria = 'flex';
            break;
    }
    echo '</br>'.$categoria.'</br>'.$subcategoria;

    preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user|shorts)\/))([^\?&\"'>]+)/", $url, $matches);
    $videoId = $matches[1];
    
    //si devuelve vacio la url no es de yutu xdxd
    if(empty($videoId)){
        echo "
		<script>
            alert('Parece ser que la URL no proviene de Youtube');
            location.href='../php/nuevoVideo.php';
    	</script>
		 
		 "; 
    }

    $nombreVideo= 'Subir-'.$videoId;

    $result= mysqli_query($link, "INSERT INTO `videos`(`nombre`, `url`, `categoria`, `subcategoria`) VALUES('$nombreVideo', '$videoId', '$categoria', '$subcategoria')");
    if (mysqli_error($result)) {
        echo "
            <script>
                alert('Ha ocurrido un error');
                location.href='../php/nuevoVideo.php';
            </script>
             
             "; 
    }else {
        echo "
            <script>
                alert('Registro Exitoso');
                location.href='../php/ejercicios.php';
            </script>
             
             "; 
    }
    /*
    if ($stmt = $link->prepare("INSERT INTO `videos`(`nombre`, `url`, `categoria`, `subcategoria`) VALUES (?, ?, ?, ?)")){
        $stmt->bind_param("sssd", $nombreVideo, $videoId, $categoria, $subcategoria);
	    $stmt->execute();
        if (!$stmt->error){
   
            echo "
            <script>
                alert('Registro Exitoso');
                location.href='../php/ejercicios.php';
            </script>
             
             "; 
        }
    }*/


/*
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
            alert('Video Agregado Exitosamente');
    	</script>
		 
		 "; 
                   }


*/
?>