<?php
	//conexion con la base de datos y el servidor
	error_reporting(0);
	$link = mysqli_connect("localhost","root","") or die(header ("Location: ../error.html"));
	mysqli_select_db($link,"bd_fitness") or die(header ("Location: ../error.html"));

?>
