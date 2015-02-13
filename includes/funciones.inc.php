<?php

function get_items_menu(){
	include('database.inc.php');//chanchada
	$sql = 'SELECT * FROM categoria ;';
	$result = mysql_query($sql, $db) or die(mysql_error());
	$arr_prof = array();
	$arr_cons = array();
		while ($row = mysql_fetch_assoc($result)) {		    
		   $item =explode('-', $row['nombre']);
		   $profesional=strpos(strtolower($item[0]), 'profesional');
		   $consumo=strpos(strtolower($item[0]), 'consumo');
		   //si es profesional
		   if($profesional!==false){
		   	$arr_prof[]=array('nombre'=>$item[1],'id'=>$row['id_categoria']);
		   }
		   // si es gran consumo
		   if($consumo!==false){
		   	$arr_cons[]=array('nombre'=>$item[1],'id'=>$row['id_categoria']);
		   }
	}

	return(array('profesional' => $arr_prof, 'gran_consumo'=>$arr_cons));

}

?>