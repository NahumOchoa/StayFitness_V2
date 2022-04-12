<?php
	//conexion con la base de datos y el servidor
	$link = mysqli_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	mysqli_select_db($link,"bd_fitness") or die("<h2>Error de Conexion</h2>");

?>
