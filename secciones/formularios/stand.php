<?php
error_reporting(0);
$tipo='Stand';
$nombre=$_REQUEST['nombre'];
$email=$_REQUEST['email'];
$titulo=$_REQUEST['titulo'];
$resumen=$_REQUEST['resumen'];
$cuerpo= "Nombre: ". $nombre . "\n" . "Email: " . $email . "\n" . "Titulo Stand: " . $titulo . "\n\n" . "Resumen: " . $resumen;
if (($nombre=="")||($email=="")||($titulo=="")||($resumen==""))
{
	header("location: ../../index.php?insr=Todos los campos son obligatorios!!");
}
else{
	$from="From: $name<$email>\r\nReturn-path: $email";
	$subject="Stand FLISOL 2016";
	mail("flisol@infodi.cl", $subject, $cuerpo, $from);

	$myfile = 'inscripciones.csv';
	$actual = file_get_contents($myfile);
	$txt = "\n" . $tipo . "|" . $nombre . "|" . $email . "|" . "" . "|" . "" . "|" . "" . "|" . "" . "|" . $titulo . "|" . "" . "|" . $resumen . "|" . "" . "|";
	file_put_contents($myfile, $txt, FILE_APPEND);
	fclose($myfile);

	header("location: ../../index.php?ins=Inscripción exitosa, Nos contactaremos!!");
}

?>
