<?php
//if(!isset($_GET['categoria']))die("No tiene Permisos");
//TODO: hacerlo bien, no esta chanchada
include('includes/database.inc.php');

if(isset($_GET['categoria'])){
	$id_categoria=$_GET['categoria'];
	$sql = "SELECT * FROM linea where id_categoria=$id_categoria ;";
}else{
	if(isset($_GET['q'])){
		$where=array();
		$search=explode(" ", $_GET['q']);
		$search=str_replace(";", "", $search);
		foreach ($search as $key) {
			if(!in_array($key, array('y',';'))){
				$where[]=" atributos  like '%$key%' or descripcion  like '%$key%' or resumen  like '%$key%' or nombre  like '%$key%' ";	
			}
			
		}
		$where=implode("or", $where);
		$sql = "select * from linea where $where;";
		
	}
		
}

$lineas = mysql_query($sql, $db) or die(mysql_error());

include('tpl/productos.tpl.php');

?>
