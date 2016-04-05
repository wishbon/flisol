<?php
error_reporting(0);
$tipo='Asistente';
$nombre=$_REQUEST['nombre'];
$email=$_REQUEST['email'];
$comuna=$_REQUEST['comuna'];
$actividad=$_REQUEST['actividad'];
$instala=$_REQUEST['instala'];
$caracteristicas=$_REQUEST['caracteristicas'];
$cuerpo= "Nombre: ". $nombre . "\n" . "Email: " . $email . "\n" . "Comuna:" . $comuna . "\n" . "Actividad: " . $actividad . "\n" . "Instala: " . $instala . "\n\n" . $caracteristicas;
if (($nombre=="")||($email=="")||($actividad==""))
{
	header("location: ../../index.php?insr=Todos los campos son obligatorios!!");
}
else{
	$from="From: $name<$email>\r\nReturn-path: $email";
	$subject="Inscripción FLISOL 2016";
	mail("flisol@infodi.cl", $subject, $cuerpo, $from);

	$myfile = 'inscripciones.csv';
	$actual = file_get_contents($myfile);
	$txt = "\n" . $tipo . "|" . $nombre . "|" . $email . "|" . $comuna . "|" . $actividad . "|" . $instala . "|" . $caracteristicas . "|" . "" . "|" . "" . "|" . "" . "|" . "" . "|";
	file_put_contents($myfile, $txt, FILE_APPEND);
	fclose($myfile);


	header("location: ../../index.php?ins=Inscripción exitosa, te esperamos!!");
}

?>
