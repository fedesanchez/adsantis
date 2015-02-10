<?php
if(!isset($_GET['categoria']))die("No tiene Permisos");
//TODO: hacerlo bien, no esta chanchada
include('database.inc.php');

if($_GET['categoria']=="profesional")$id_categoria=1;
if($_GET['categoria']=="gran_consumo")$id_categoria=2;


// Slider Principal
$sql = "SELECT * FROM linea where id_categoria=$id_categoria ;";
$lineas = mysql_query($sql, $db) or die(mysql_error());
//$arrSlider = mysql_fetch_array($result);

include('tpl/productos.tpl.php');

?>