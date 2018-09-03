<?php
	require 'conexion.php';
		$user=$_POST["user"];
		$pass=$_POST["pass"];
		$sql = "INSERT INTO usuarios (user, pass) VALUES ('$user', '$pass')";
if (mysqli_query($conn, $sql)) {
      echo "USTED FUE REGISTRADO EXITOSAMENTE EN EL SISTEMA DE CONVENIO DEL DEPARTAMENTO V";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>