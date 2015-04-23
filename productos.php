<?php
//if(!isset($_GET['categoria']))die("No tiene Permisos");
//TODO: hacerlo bien, no esta chanchada
include('includes/database.inc.php');

if(isset($_GET['categoria'])){
	$id_categoria=$_GET['categoria'];
	$sql = "SELECT * FROM linea where id_categoria=$id_categoria ;";
}else{
	if(isset($_GET['search']))$search=$_GET['search'];
	$sql = "select * from linea where atributos  like '%$search%' or descripcion  like '%$search%' or resumen  like '%$search%' or nombre  like '%$search%'";

}

$lineas = mysql_query($sql, $db) or die(mysql_error());

include('tpl/productos.tpl.php');

?>
