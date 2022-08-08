<?php
	require_once 'conectar.php';
    
	mysqli_query($link, "DELETE FROM `videos` WHERE `id`='$_REQUEST[id]'") or die(mysqli_error());
	echo $_REQUEST['id'];
    header("location: ../php/ejercicios.php");
?>