<?php
//TODO: hacerlo bien, no esta chanchada
include('includes/database.inc.php');

// Slider Principal
$sql = 'SELECT * FROM slider ;';
$slider=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);


$sql2 = 'SELECT * FROM slider_ta ORDER BY RAND() LIMIT 1;';
$sliderta=$pdo->query($sql2)->fetch(PDO::FETCH_ASSOC);


$data_wow_delay=0.2;
include('tpl/index.tpl.php');
?>
