<?php session_start(); ?>
<?php include('traitement_pseudo.php') ?>
<?php // Connexion à la base de données 
try { $bdd = new PDO('mysql:host=localhost;dbname=genius_classroom', 'root', ''); 
} catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
         } // Insertion du message à l'aide d'une requête préparée
          $req = $bdd->prepare('INSERT INTO '.pseudo_transforme($_SESSION['pseudo']).' (course_title, course_link) VALUES(?, ?)');
           $req->execute(array($_GET['name'], $_GET['lien']));
           echo'Pseudo: '.$_SESSION['pseudo'].'  name_course: '.$_GET['name'].'  lien: '.$_GET['lien'];
            //Mise a jour du nombre de cours suivis dans la table visiteur
           $reponse = $bdd->query('SELECT nombre_cours_suivis  FROM visiteur WHERE pseudonyme = \''.$_SESSION['pseudo'].'\'');
           $donnees = $reponse->fetch();
            $nbr =  $donnees['nombre_cours_suivis'];
            $nbr++; 
 		     			

                 

            $bdd->exec('UPDATE visiteur SET nombre_cours_suivis = '.$nbr.' WHERE pseudonyme = \''.$_SESSION['pseudo'].'\'');



            // Redirection du visiteur vers la page du minichat 

         // header('Location: faculte-des-sciences.php'); 
          ?>