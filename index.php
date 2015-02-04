<?php
//TODO: hacerlo bien, no esta chanchada
include('database.inc.php');

// Slider Principal
$sql = 'SELECT * FROM slider ;';
$slider = mysql_query($sql, $db) or die(mysql_error());
//$arrSlider = mysql_fetch_array($result);



//print_r($arrSlider);
include('tpl/index.tpl.php');
?>