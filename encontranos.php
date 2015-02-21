<?php
//TODO: hacerlo bien, no esta chanchada
if(!isset($_GET['tipo']))die("Error: no tiene permisos para ver esto");
include('includes/database.inc.php');

if($_GET['tipo']=='puntos'){
	$tabla='punto_venta';
	$tit='Puntos de Venta';
}

if($_GET['tipo']=='salones'){
	$tabla='salon';
	$tit='Salones';
}


$sql = "SELECT * FROM $tabla ;";
$tmp = mysql_query($sql, $db) or die(mysql_error());

$arrPuntos = array();
while ($item = mysql_fetch_array($tmp, MYSQL_ASSOC)) {
  array_push($arrPuntos, $item);
}

include('tpl/mapa.tpl.php');
?>