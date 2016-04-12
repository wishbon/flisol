<?php
if (isset($_POST['pass'])){
	$clave = $_POST['pass'];
	if ($clave != "fl150l2016"){
		?>
<div style="margin:40px 0 0 0;text-align:center;">
		<p>
			No tienes lo que hay que tener...
		</p>
		<img src="http://i.imgur.com/65goE8v.gif" alt="" />
	</div>
	<?php }
	else if ($clave == "fl150l2016"){
		?>
<?php
error_reporting(0);
$sortby = $_SERVER['QUERY_STRING'];

$set = '';
if ($sortby == '') {
	$header = 'tipo';
	$sortby = 'Tipo';
	$set = 'y';
}
if ($sortby == 'tipo') {
	$header = 'tipo';
	$sortby = 'Tipo';
	$set = 'y';
}
if ($sortby == 'nombre') {
	$header = 'Nombre';
	$set = 'y';
}
if ($sortby == 'email') {
	$header = 'Email';
	$set = 'y';
}
if ($sortby == 'comuna') {
	$header = 'Comuna';
	$set = 'y';
}
if ($sortby == 'actividad') {
	$header = 'Actividad';
	$set = 'y';
}
if ($sortby == 'trae') {
	$header = 'Trae';
	$set = 'y';
}
if ($set == '') {
	echo 'Imposible';
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta charset="utf-8" />

<title>Registro Asistencia FLISoL</title>

<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300);
body {
	padding: 10px;
	margin: 20px;

}
body, th, td, p, small {
	font-family: 'Roboto', sans-serif;
	font-size: 13px;
	color: white;
}
table {
    text-align: left;
    border-collapse: collapse;
}
th {
    font-size: 13px;
    font-weight: normal;
    background: #b9c9fe;
    border-top: 4px solid #aabcfe;
    border-bottom: 1px solid #fff;
    color: #039;
    padding: 8px;
}
td {
    padding: 8px;
}
tr:nth-child(2) {
	display: none;
}
tr.Asistente td {
	background: #1abc9c;
	border-right: 1px solid #16a085;
	border-bottom: 1px solid #16a085
}
tr.Charla td {
	background: #3498db;
	border-right: 1px solid #2980b9;
	border-bottom: 1px solid #2980b9
}
tr.Taller td {
	background: #9b59b6;
	border-right: 1px solid #8e44ad;
	border-bottom: 1px solid #8e44ad;
}
tr.Stand td {
	background: #e67e22;
	border-right: 1px solid #d35400;
	border-bottom: 1px solid #d35400;
}
.tipos {
	display: flex;
}
.tipos div {
	padding: 10px;
	margin: 0 10px 10px 0;
}
</style>

</head>

<body>
	<div class="tipos">

		<script src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
	         <script type="text/javascript">

					 $( document.body )
 .ready(function() {
	 $( document.body ).append( $( "<tr>" ) );
	 var na = $( ".Asistente" ).length;
	 var nc = $( ".Charla" ).length;
	 var nt = $( ".Taller" ).length;
	 var ns = $( ".Stand" ).length;
	 var total = $( ".Stand").length + $( ".Taller").length + $( ".Charla").length + $( ".Asistente").length;


	 $("span.as").text(na);
	 $("span.ch").text(nc);
	 $("span.ta").text(nt);
	 $("span.st").text(ns);
	 $("span.to").text(total);

 })

	         </script>

<div style="background:#16a085">Asistentes: <span class="as"></span></div>
<div style="background:#2980b9">Charla: <span class="ch"></span></div>
<div style="background:#8e44ad">Taller: <span class="ta"></span></div>
<div style="background:#d35400">Stand: <span class="st"></span></div>
<div style="background:#7f8c8d">Total: <span class="to"></span></div>
<div class="descargar" style="background: #bdc3c7;">
	<a href="../secciones/formularios/inscripciones.csv" style="text-decoration:none;">Descargar Inscripciones CSV</a>
</div>
</div>
</div>
<?php
echo '
<table summary="List of demo fields">
<tr>
<th><a href="?tipo">Tipo</a></th>
<th><a href="?nombre">Nombre</a></th>
<th><a href="?email">Email</a></th>
<th><a href="?comuna">Comuna</a></th>
<th><a href="?actividad">Actividad</a></th>
<th><a href="?">Trae</a></th>
<th><a>Características</a></th>
<th><a>Título</a></th>
<th><a>Público</a></th>
<th><a>Resumen</a></th>
<th><a>Conocimientos</a></th>

</tr>';

$fp = fopen('../secciones/formularios/inscripciones.csv','r');
if (!$fp) {echo 'ERROR: Unable to open file.</table></body></html>'; exit;}

$row = 0;

while (!feof($fp)) {
	$row++;
	$line = fgets($fp,1024);
	$field[$row] = explode('|', $line);
	if ($sortby == 'tipo') {$sortkey = strtolower($field[$row][0]);}
	if ($sortby == 'nombre') {$sortkey = strtolower($field[$row][1]);}
	if ($sortby == 'email') {$sortkey = strtolower($field[$row][2]);}
	if ($sortby == 'comuna') {$sortkey = $field[$row][3];}
	if ($sortby == 'actividad') {$sortkey = strtolower($field[$row][4]);}
	if ($sortby == 'trae') {$sortkey = strtolower($field[$row][5]);}
	if ($sortby == 'caracteristicas') {$sortkey = strtolower($field[$row][6]);}
	if ($sortby == 'titulo') {$sortkey = strtolower($field[$row][7]);}
	if ($sortby == 'publico') {$sortkey = strtolower($field[$row][8]);}
	if ($sortby == 'resumen') {$sortkey = strtolower($field[$row][9]);}
	if ($sortby == 'conocimientos') {$sortkey = strtolower($field[$row][10]);}
	array_unshift($field[$row], $sortkey); 
}

fclose($fp);

sort($field);
reset($field);

$arrays = count($field) - 1;

$loop = -1;
while ($loop < $arrays) {
	$loop++;
	echo '
<tr class="'
.$field[$loop][1].
'">
<td>'.$field[$loop][1].'</td>
<td>'.$field[$loop][2].'</td>
<td>'.$field[$loop][3].'</td>
<td>'.$field[$loop][4].'</td>
<td>'.$field[$loop][5].'</td>
<td>'.$field[$loop][6].'</td>
<td>'.$field[$loop][7].'</td>
<td>'.$field[$loop][8].'</td>
<td>'.$field[$loop][9].'</td>
<td>'.$field[$loop][10].'</td>
<td>'.$field[$loop][11].'</td>
</tr>';
}

echo '
</table>
' ?>

<?php
}
?>
<?php
}else{
?>
<form method="POST">
	<input type="password" name="pass" placeholder="Clave de acceso">
</form>
<?php
}
?>


</body>
</html>
