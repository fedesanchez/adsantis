<?php
//TODO: hacerlo bien, no esta chanchada
include('includes/database.inc.php');
include('includes/traducciones.inc.php');
$path=realpath(dirname($_SERVER['DOCUMENT_ROOT'])).'/php_sessions';
ini_set('session.save_path',$path);
session_start();
if(isset($_GET['lang'])){
	$_SESSION['lang']=$_GET['lang'];
}

// Slider Principal
$sql = 'SELECT * FROM slider where habilitado=1;';
$slider=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

$sql2 = 'SELECT * FROM slider_ta ORDER BY RAND() LIMIT 1;';
$sliderta=$pdo->query($sql2)->fetch(PDO::FETCH_ASSOC);

if(isset($_SESSION['lang'])&& $_SESSION['lang']=='en'){
	$slider=traducir($slider);
	$sliderta=traducir_triple_accion($sliderta);
}

$data_wow_delay=0.2;
include('tpl/index.tpl.php');

?>
