<?php session_start(); ?>
 
<?php // Connexion à la base de données 
try { $bdd = new PDO('mysql:host=localhost;dbname=genius_classroom', 'root', ''); 
} catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
         } // Insertion du message à l'aide d'une requête préparée
        
            // Redirection du visiteur vers la page du minichat 
           $pass_hache = sha1($_POST['pass']);
          $req = $bdd->prepare('SELECT id FROM visiteur WHERE pseudonyme = :pseudo AND password = :pass');
          $req->execute(array('pseudo' => $_POST['pseudonyme'],'pass' => $pass_hache));
        
          $resultat = $req->fetch();
          $req->closeCursor();
          if (!$resultat)
          {
            echo "not";
          }
        else
        {
        $_SESSION['pseudo'] = $_POST['pseudonyme'];
        echo "yes";
        }


          ?>

     
