<?php


function traducir($data){
	$lang=include('../admin/libs/translate/en.php');
	if(!$lang){
		error_log("no incluyo el archivo con traducciones");		
		return $data;
	}

	foreach ($data as &$row) {
		foreach ($row as $key => &$value) {
			foreach ($lang as $k => $l) {
				if($value==$l['original']){
					$value=$l['traduccion'];
				}
			}
		}	
	}
	
	return $data;
	
}

// cambie las ruttas de admin/libs/translate/en.php para que ande en el server
// en localhost deberia ser ../admin.....

function traducir_triple_accion($data){
	$lang=include('admin/libs/translate/en.php');
	if(!$lang){
		error_log("no incluyo el archivo con traducciones");		
		return $data;
	}

	
	foreach ($data as $key => &$value) {
		foreach ($lang as $k => $l) {
			if($value==$l['original']){				
				$value=$l['traduccion'];
			}
		}
	}	
	
	
	return $data;
	
}

function traducir_menu($data,$tipo){
	$lang=include('admin/libs/translate/en.php');
	if(!$lang){
		error_log("no incluyo el archivo con traducciones");		
		return $data;
	}

	foreach ($data as $key => &$value) {
		foreach ($lang as $k => $l) {
			if($tipo.$value['nombre']==$l['original']){								
				$item=explode('-', $l['traduccion']);
				$value['nombre']=$item[1];
			}
		}
	}	
	
	
	return $data;
	
}

?>