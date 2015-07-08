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

$arrPuntos=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

include('tpl/mapa.tpl.php');
?>