<?php

include('includes/database.inc.php');

$sql = "SELECT * FROM consejo;";
$consejos=$pdo->query($sql)->fetchAll();

include("tpl/consejos.tpl.php");

?>