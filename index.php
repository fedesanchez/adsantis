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

include('tpl/index.tpl.php');
?>