<?php
if(!isset($_GET['id']))die("No tiene Permisos");
//TODO: hacerlo bien, no esta chanchada
include('includes/database.inc.php');


$id=$_GET['id'];
// Slider Principal
$sql = "SELECT l.*,c.nombre as categoria FROM linea l join categoria c on l.id_categoria=c.id_categoria where id_linea=$id;";

$linea=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

$atributos = explode(",", $linea['atributos']);

$data_wow_delay=0.2;

include('tpl/producto.tpl.php');
?>