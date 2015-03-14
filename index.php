<?php
//TODO: hacerlo bien, no esta chanchada
include('includes/database.inc.php');

// Slider Principal
$sql = 'SELECT * FROM slider ;';
$slider = mysql_query($sql, $db) or die(mysql_error());
//$arrSlider = mysql_fetch_array($result);

$sql2 = 'SELECT * FROM slider_ta ORDER BY RAND() LIMIT 1;';
$random_slider = mysql_query($sql2, $db) or die(mysql_error());
$sliderta = mysql_fetch_assoc($random_slider);

$sql3 = 'SELECT * FROM linea where novedad=1 ORDER BY RAND() LIMIT 4;';
$novedades = mysql_query($sql3, $db) or die(mysql_error());
$data_wow_delay=0.2;
include('tpl/index.tpl.php');
?>