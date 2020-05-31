<?php  include('includes/connexion.php'); ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="disiegn.css">
        <title>UDS->GENIUS CLASSROOM</title>
    </head>
    
    <body>

 
<?php include("entete.php"); ?>
 <?php include("menu-navigation.php"); ?>
<?php include("cote-gauche-commun.php"); ?>
 <section style="padding: 1px;margin: auto;width: 60%;float: inherit;text-align: center;">
 	<p style="font-size: 65px;font-family: sans-serif;color: cornflowerblue;text-align: center;"><i><b style="font-size: 70px;">geniusclassroom </b><br>
                 vous souhaite <br>la bienvenue <img src="Ressources/fleche-rouge-oblique.png" style="height: 40px"></i></p>
            
<h1 style="text-align: center;"><p> H&eacute; h&eacute; salut 
	<b style="color: blue;">
		<?php 
		/***********************Conection a la base de donnees**************************/
         try{
         	$bdd = new PDO('mysql:host=localhost;dbname=genius_classroom','root','');

         }catch(Exception $e){
         	die('Impossible d\'etablir la connection avec la base de donnees code d\'erreur: '.$e->getMessage());
         }
         $pseudo = $_POST['pseudo'];
         $email = $_POST['adresseMail'];
   //Cette ligne permet d'inserer des valeur dans la table visiteur
  // $bdd->exec('INSERT INTO `visiteur`(`pseudonyme`, `addresse_email`) VALUES ($pseudo,$email)');

         //*****************Inserer avec des requetes preparees***************************
         //Ici on definit notre requete preparee
         $query = $bdd->prepare('INSERT INTO `visiteur`(`pseudonyme`, `addresse_email`) VALUES(:pseudonyme,:addresse_email)');
         //Avecl'instructin qui suit on l'execute
         $query->execute(array('pseudonyme' => $pseudo ,'addresse_email' => $email));
    
  //On recpere tous ce qu'il y adans la table visiteur ce contenu est ensuite affectee a la variable $selection
   $selection = $bdd->query('SELECT * FROM visiteur WHERE 1');

  //Affichage des users en les recuperant ligne par ligne dans la bd

    echo "Attention, voila tous les inscrits sur votr site <br><br>";
   while($ligne = $selection->fetch()){
  
   echo"id: ";echo$ligne['id'];
   echo " pseudonyme ";echo$ligne['pseudonyme'];
   echo " E-mail : ";echo$ligne['addresse_email'];echo "<br>";
}
 $selection->closeCursor();

		echo$_POST['pseudo'];
		echo " ton E-mail: ";echo  $email = $_POST['adresseMail'];?>
			
		</b>  bienvenu sur geniusClassroom!</p></h1><br><br>
<p>Nous vous souhaitons &eacute;galement de passer un bon s&eacute;jour au sein de notre communot&eacute;</p><br>

<p>Si jamais vous souhaitez changer de pseudo, <a href="formulaire-inscription.html">cliquez
ici</a> pour revenir à la page formulaire.php.</p>


</section>
 <?php include("footer.php"); ?>
</body>
</html>