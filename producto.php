<?php
if(!isset($_GET['id']))die("No tiene Permisos");
//TODO: hacerlo bien, no esta chanchada
include('includes/database.inc.php');


$id=$_GET['id'];
// Slider Principal
$sql = "SELECT l.*,c.nombre as categoria FROM linea l join categoria c on l.id_categoria=c.id_categoria where id_linea=$id;";

$tmp = mysql_query($sql, $db) or die(mysql_error());
$linea=mysql_fetch_array($tmp, MYSQL_ASSOC);

$atributos = explode(",", $linea['atributos']);

$sql3 = 'SELECT * FROM linea where novedad=1 ORDER BY RAND() LIMIT 4;';
$novedades = mysql_query($sql3, $db) or die(mysql_error());
$data_wow_delay=0.2;

include('tpl/producto.tpl.php');
?>