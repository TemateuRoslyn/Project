<?php 
try{
$bd = new PDO('mysql:host=localhost;dbname=genius_classroom', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                                                              PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}catch(Exception $e){
	die('Impossible de se conecté à cette base de données code d\'erreurs: '.$e->getMessage());
}

 ?>