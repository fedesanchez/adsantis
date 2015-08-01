<?php
$path=realpath(dirname($_SERVER['DOCUMENT_ROOT'])).'/php_sessions';
ini_set('session.save_path',$path);
session_start();
include('tpl/contacto.tpl.php');
?>