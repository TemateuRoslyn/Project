<?php session_start(); ?>
 
<?php // Connexion à la base de données 
try { $bdd = new PDO('mysql:host=localhost;dbname=genius_classroom', 'root', ''); 
} catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
         } // Insertion du message à l'aide d'une requête préparée
         $bool = false;
          $reponse = $bdd->query('SELECT * FROM visiteur');
           while ($donnees = $reponse->fetch()) {
            if(strtolower($donnees['pseudonyme']) == strtolower($_GET['pseudonyme']) AND strtolower($donnees['password']) == strtolower($_GET['pass'])){
            	$_SESSION['pseudo'] = $_GET['pseudonyme'];
            	$_SESSION['conecte'] = true;
              $bool = true;
            } 
             } 
             if ($bool == true) {
               echo "connexion";
             }else{
              echo "Notconexion";
             }
            // Redirection du visiteur vers la page du minichat 
           


          ?>

     
