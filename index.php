<?php

$db = mysql_connect('localhost','root','Xx420944');
mysql_select_db('santis', $db);

// Slider Principal

$sql = 'SELECT * FROM slider ;';
$result = mysql_query($sql, $db) or die(mysql_error());
//$arrSlider = mysql_fetch_array($result);



//print_r($arrSlider);
include('tpl/index.tpl.php');
?>