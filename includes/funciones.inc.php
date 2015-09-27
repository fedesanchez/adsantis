<?php
if(!function_exists('traducir'))include('includes/traducciones.inc.php');
function get_items_menu(){
	include('database.inc.php');//chanchada
	$sql = 'SELECT * FROM categoria ;';
	$result = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	$arr_prof = array();
	$arr_cons = array();
		foreach ($result as $row) {
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

function get_novedades(){
	include('database.inc.php');//chanchada
	$sql = 'SELECT * FROM linea where novedad=1 ORDER BY RAND() LIMIT 4;';
	$novedades = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

	if($_SESSION['lang']=='en'){
		$novedades=traducir($novedades);
	}
	return $novedades;

}

function esImagen($url)
  {
     $params = array('http' => array(
                  'method' => 'HEAD'
               ));
     $ctx = stream_context_create($params);
     $fp = @fopen($url, 'rb', false, $ctx);
     if (!$fp)
        return false;  // Problem with url

    $meta = stream_get_meta_data($fp);
    if ($meta === false)
    {
        fclose($fp);
        return false;  // Problem reading data from url
    }

    $wrapper_data = $meta["wrapper_data"];
    if(is_array($wrapper_data)){
      foreach(array_keys($wrapper_data) as $hh){
          if (substr($wrapper_data[$hh], 0, 19) == "Content-Type: image") // strlen("Content-Type: image") == 19
          {
            fclose($fp);
            return true;
          }
      }
    }

    fclose($fp);
    return false;
  }

?>
