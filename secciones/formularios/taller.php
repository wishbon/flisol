<?php
error_reporting(0);
$tipo='Taller';
$nombre=$_REQUEST['nombre'];
$email=$_REQUEST['email'];
$titulo=$_REQUEST['titulo'];
$publico=$_REQUEST['publico'];
$conocimientos=$_REQUEST['conocimientos'];
$resumen=$_REQUEST['resumen'];
$cuerpo= "Nombre: ". $nombre . "\n" . "Email: " . $email . "\n" . "Titulo Taller: " . $titulo . "\n" . "Público: " . $publico . "\n" . "Conocimientos necesarios: " . $conocimientos . "\n\n" . "Resumen: " . $resumen;
if (($nombre=="")||($email=="")||($titulo=="")||($resumen==""))
{
	header("location: ../../index.php?insr=Todos los campos son obligatorios!!");
}
else{
	$from="From: $name<$email>\r\nReturn-path: $email";
	$subject="Taller FLISOL 2016";
	mail("flisol@infodi.cl", $subject, $cuerpo, $from);

	$myfile = 'inscripciones.csv';
	$actual = file_get_contents($myfile);
	$txt = "\n" . $tipo . "|" . $nombre . "|" . $email . "|" . "" . "|" . "" . "|" . "" . "|" . "" . "|" . $titulo . "|" . $publico . "|" . $resumen . "|" . $conocimientos . "|";
	file_put_contents($myfile, $txt, FILE_APPEND);
	fclose($myfile);


	header("location: ../../index.php?ins=Inscripción exitosa, Nos contactaremos!!");
}

?>
