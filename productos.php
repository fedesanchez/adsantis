<?php
if(!isset($_GET['categoria']))die("No tiene Permisos");
//TODO: hacerlo bien, no esta chanchada
include('includes/database.inc.php');

$id_categoria=$_GET['categoria'];

// Slider Principal
$sql = "SELECT * FROM linea where id_categoria=$id_categoria ;";
$lineas = mysql_query($sql, $db) or die(mysql_error());
//$arrSlider = mysql_fetch_array($result);

include('tpl/productos.tpl.php');

?>