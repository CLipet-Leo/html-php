<?php 
$pdo = new PDO(
	'mysql:host=localhost;dbname=mybdd;',
	'root',
	'',
	array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);


//c'est ici qu'on écrit du PHP.
?>