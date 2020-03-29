<?php 

	$nombre = $_POST['nombre'];
	$Apa = $_POST['Apa'];
	$Ama = $_POST['Ama'];
	$carrera = $_POST['carrera'];
	$turno = $_POST['turno'];
	$matricula = $_POST['matricula'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	$sexo = $_POST['sexo'];
	$curso = $_POST['curso'];

	$contenido="
	Nombre: $nombre
			Apellido Paterno: $Apa
			Apellido Materno: $Ama
			Carrera: $carrera
			Turno: $turno
			Matricula: $matricula
			Teléfono: $telefono
			Correo electrónico: $correo
			Sexo: $sexo
			Curso de preferencia: $curso
	";
	
		$archivo = fopen("datos/$Apa.txt", "w");
		fwrite($archivo, $contenido);

	echo "<h2>Verifique sus datos:</h2>";
	echo "El nombre es:" . $nombre . "<br/>";
	echo "Apellido Paterno:" . $Apa ."<br/>";
	echo "Apellido Materno:" . $Ama . "<br/>";
	echo "Carrera:" . $carrera . "<br/>";
	echo "Turno:" . $turno . "<br/>";
	echo "Matricula:" . $matricula . "<br/>";
	echo "Teléfono:" . $telefono . "<br/>";
	echo "Correo electrónico:" . $correo . "<br/>";
	echo "Sexo:" . $sexo . "<br/>";
	echo "Curso:" . $curso . "<br/>";

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Datos</title>
 	<meta charset="utf-8">
 </head>
 <body>
 <h2><center><font face="Arial" color="green">Datos Guardados Correctamente.</center></h2>
 	<h5><center><font face="Arial" color="red"></font><a href="index.html">Regresar al inicio</a></h5></center>
 </body>
 </html>