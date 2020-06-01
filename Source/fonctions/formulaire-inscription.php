<?php include('my_game_function.php'); ?>
<?php session_start(); 
$_SESSION['pseudo'] = $_POST['pseudo'];
  // Connexion à la base de données 
try 
{
   $bdd = new PDO('mysql:host=localhost;dbname=genius_classroom', 'root', ''); 
} catch(Exception $e) 
 {
   die('Erreur : '.$e->getMessage());
 } 


         
          // Recuperation de l'image de profil
            $tof_profil = NULL;
            $chemin  = NULL;
            $chemin_temporaire = NULL;
            $source = NULL;
          if (isset($_FILES['profil']['name']) AND  $_FILES['profil']['error'] == 0) 
          {
             // recuperation du nombre d'utilisateur courante du site
             $re_comt_nb = $bdd->query('SELECT COUNT(*) AS nb_usr FROM visiteur');
             $ligne =  $re_comt_nb->fetch();
             $nb = $ligne['nb_usr'];//le nombre d'utiliateurs
             $nb++;
             $re_comt_nb->closeCursor();

              /******************************************************
              *****Traitement de l'image entree par l'utilisateur****
              *******************************************************/

               // Recuperation de l'extention du fichier
              $info_file = pathinfo($_FILES['profil']['name']);
              $extension = $info_file['extension']; //l'extention
              $image_name = basename($_FILES['profil']['name']);
              // tableau d'extentions autorises
              $insertion_autorise_table = array('jpg', 'jpeg', 'png', 'gif');
             if (in_array($extension, $insertion_autorise_table)) 
             {
                $chemin_temporaire = '../profil_tmp/'.$nb.'.'.$extension;
                move_uploaded_file($_FILES['profil']['tmp_name'], $chemin_temporaire);
             }

             // test du format de la source
               if ($extension == 'gif') {
                $source = imagecreatefromgif($chemin_temporaire);
              }else if ($extension == 'jpeg' OR $extension == 'jpg') {
                $source = imagecreatefromjpeg($chemin_temporaire);
              }elseif ($extension == 'png') {
                $source = imagecreatefrompng($chemin_temporaire);
              }else{
                $source = imagecreatefromstring($chemin_temporaire);
              }
               

              $destination = imagecreatetruecolor(133, 133); // On crée laminiature vide
              // Les fonctions imagesx et imagesy renvoient la largeur et lahauteur d'une image
              $largeur_source = imagesx($source);
              $hauteur_source = imagesy($source);
              $largeur_destination = imagesx($destination);
              $hauteur_destination = imagesy($destination);

                // On crée la miniature
              imagecopyresampled($destination, $source, 0, 0, 0, 0,
              $largeur_destination, $hauteur_destination, $largeur_source,$hauteur_source);
              // On enregistre la miniature sous le nom correspondant
              //On test les differents formats d'images

              if ($extension == 'gif') {
                imagegif($destination, '../usr_profil/'.$nb.'.'.$extension);
              }else if ($extension == 'jpeg' OR $extension == 'jpg') {
                imagejpeg($destination, '../usr_profil/'.$nb.'.'.$extension);
              }elseif ($extension == 'png') {
                imagepng($destination, '../usr_profil/'.$nb.'.'.$extension);
              }
              $chemin = 'usr_profil/'.$nb.'.'.$extension;
              

           
          }else{
            $chemin = 'usr_profil/utilisateur.png';
          }
          // Suppresion du repertire temporaire ou ont ete stockees les image
          array_map('unlink', glob('../profil_tmp/'.'*.png'));
          array_map('unlink', glob('../profil_tmp/'.'*.jpg'));
          array_map('unlink', glob('../profil_tmp/'.'*.jpeg'));
          array_map('unlink', glob('../profil_tmp/'.'*.gif'));



         // Insertion du visiteur à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO visiteur (pseudonyme, password, addresse_email, date_arrivee, nombre_cours_suivis, description, profil) VALUES(?, ?, ?, ?, ?, ?, ?)');
          $annee = date('Y');
          $mois = date('m');
          $jour = date('d');
          $date = $annee.'-'.$mois.'-'.$jour;

          $passhash = sha1($_POST['pass']);
          $req->execute(array($_POST['pseudo'], $passhash, $_POST['email'], $date, 0, $_POST['description'], $chemin));

          $user_table = pseudo_transforme($_POST['pseudo']); /*La fonction pseudo_transforme() est forni dans un fichier et permeet de supprimer les anti-slash, les epace et les balises html dans une chein de caractere*/
         
          if($bdd){

               $requete = $bdd->query('CREATE TABLE IF NOT EXISTS '.$user_table.'( 
                          `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
              			  `course_title` VARCHAR(80) NOT NULL ,
              			  `course_link` VARCHAR(150))');
               // header('Location: Projet-web.php');
           //   $bdd->prepare($requete)->execute();

           }

       header('Location: ../Projet-web.php')  ;  

     ?>  
 








