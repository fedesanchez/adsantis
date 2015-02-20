<?php
//TODO: hacerlo bien, no esta chanchada
if(!isset($_GET['tipo']))die("Error: no tiene permisos para ver esto");
include('includes/database.inc.php');

/*
$sql2 = 'SELECT * FROM slider_ta ORDER BY RAND() LIMIT 1;';
$random_slider = mysql_query($sql2, $db) or die(mysql_error());
$sliderta = mysql_fetch_assoc($random_slider);
*/

include('tpl/mapa.tpl.php');
?>