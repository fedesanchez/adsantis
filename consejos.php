<?php

include('includes/database.inc.php');
include('includes/traducciones.inc.php');
$path=realpath(dirname($_SERVER['DOCUMENT_ROOT'])).'/php_sessions';
ini_set('session.save_path',$path);
session_start();

$sql = "SELECT * FROM consejo;";
$consejos=$pdo->query($sql)->fetchAll();

if($_SESSION['lang']=='en'){
	$consejos=traducir($consejos);
}

include("tpl/consejos.tpl.php");

?>