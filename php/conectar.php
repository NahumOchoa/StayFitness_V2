<?php
	//conexion con la base de datos y el servidor
	error_reporting(0);
	$link = mysqli_connect("localhost","root","") or die("<h2 align='center'>No se encuentra el servidor</h2>");
	mysqli_select_db($link,"bd_fitness") or die("<h2 align='center'>Error de Conexion</h2>");

?>
