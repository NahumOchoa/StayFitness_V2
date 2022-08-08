<?php
	//conexion con la base de datos y el servidor
	error_reporting(0);
	$link = mysqli_connect("localhost","id19205082_root","&[94)yOGf#a|1SR?") or die(header ("Location: ../error.html"));
	mysqli_select_db($link,"id19205082_root") or die(header ("Location: ../error.html"));

?>
