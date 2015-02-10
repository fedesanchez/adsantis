<?php
if(!isset($_GET['id']))die("No tiene Permisos");
//TODO: hacerlo bien, no esta chanchada
include('database.inc.php');


$id=$_GET['id'];
// Slider Principal
$sql = "SELECT l.*,c.nombre as categoria FROM linea l join categoria c on l.id_categoria=c.id_categoria where id_linea=$id;";

$tmp = mysql_query($sql, $db) or die(mysql_error());
$linea=mysql_fetch_array($tmp, MYSQL_ASSOC);

$atributos = explode(",", $linea['atributos']);

include('tpl/producto.tpl.php');
?>