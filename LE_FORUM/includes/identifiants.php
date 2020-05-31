


<?php
/*Cette page va permettre de lancer la connexion à la base de données, en utilisant une page à part on évite de réécrire à chaque
fois nos identifiants, ce qui n'est pas pratique et pas top niveau sécurité*/
	try
{
		$db = new PDO('mysql:host=localhost;dbname=test', 'root', '');
	}catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
} ?>