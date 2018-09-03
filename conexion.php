<?php

	$servername	='localhost';
	$username	='root';
	$password	='';
	$database	='proyecto2';

	$conn = mysqli_connect($servername, $username, $password, $database);

	if (!$conn) {
      	return ("ERROR AL CONECTAR");
 	}
 	else{
 		return ("CONEXION CORRECTA");
 	}
?>
