<?php  include('includes/connexion.php'); ?>
<?php session_start(); 
 //Connecxion à la base de données
try{
 $bdd = new PDO('mysql:host=localhost;dbname=genius_classroom','root','');
}catch(Exception $e){
	die('Impossible d\'établir la connecxion avec la base de donnés, \n Erreur: '.$e->getMessage());
}
$requete = $bdd->query('SELECT *  FROM visiteur WHERE pseudonyme =\''.$_SESSION['pseudo'].'\'');
$ligne = $requete->fetch();
$profil_image = $ligne['profil'];

//Recuperation des 10 derniers messages postes
$re_chat = $bdd->prepare('SELECT le_message FROM chat WHERE le_pseudo = :pseudo LIMIT :debut, :nombre_message');

$re_chat->bindValue(':pseudo', $_SESSION['pseudo'], PDO::PARAM_STR);
$re_chat->bindValue(':debut', 0, PDO::PARAM_INT);
$re_chat->bindValue(':nombre_message', 10, PDO::PARAM_INT);

$re_chat->execute();

//Recuperation des 10 derniers commentaires postes
$re_com = $bdd->prepare('SELECT * FROM commentaires WHERE pseudo = :pseudo LIMIT :debut, :nombre_message');

$re_com->bindValue(':pseudo', $_SESSION['pseudo'], PDO::PARAM_STR);
$re_com->bindValue(':debut', 0, PDO::PARAM_INT);
$re_com->bindValue(':nombre_message', 10, PDO::PARAM_INT);

$re_com->execute();

//Nombres de message postes
$re_chat_nb = $bdd->prepare('SELECT COUNT(*) AS nb_message FROM chat WHERE le_pseudo = :pseudo');
$re_chat_nb->execute(array('pseudo' => $_SESSION['pseudo']));
$don = $re_chat_nb->fetch();
$nombre_message = $don['nb_message']; //Nombre de messages postes

$re_chat_nb->closeCursor();

//Nombres de visiteur du site
$re_viteur_nb = $bdd->query('SELECT COUNT(*) AS nb_visiteur FROM visiteur');
$nb_visiteur = $re_viteur_nb->fetch();
$nombre_mvisiteur = $nb_visiteur['nb_visiteur']; //Nombre visiteur du site

$re_viteur_nb->closeCursor();



//Nombres de commentaire postes
$re_comt_nb = $bdd->prepare('SELECT COUNT(*) AS nb_message FROM commentaires WHERE pseudo = :pseudo');
$re_comt_nb->execute(array('pseudo' => $_SESSION['pseudo']));
$don_com = $re_comt_nb->fetch();
$nombre_com = $don_com['nb_message']; //Nombre de messages postes

$re_comt_nb->closeCursor();
  function indice_search($chemin)
  {
  	$tab_int = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0');
    $numero = '';
    if (in_array('t', $chemin)) {
    	return true;
    }else
    {
  		for ($i=0; $i < strlen($chemin); $i++) 
  		{ 
  			if (in_array($chemin[$i], $tab_int)) 
  			{
  				$numero  .= $chemin[$i];
  			}
  		}
  	}
  	return $numero;
  }
?>

<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
       <!-- <link rel="stylesheet" href="disiegn.css">-->
        <link rel="stylesheet" type="text/css" href="CSS/responsive.css">

    <!--Style utilisee pour Smarphone-->
        <link rel="stylesheet" media="screen and (max-width: 1280px)"  href="CSS/responsive-design.css">
       <script type="text/javascript" src="Scripts/java_script_source_code.js"></script>
       <link rel="stylesheet" href="CSS/modal_box.css">
       <script type="text/javascript" src="Scripts/session_destroy.js"></script>
        <title>UDS->GENIUS CLASSROOM</title>
    </head>

  <body>
  	  <!-- La boite modale -->

   <div id="mymodal" class="modal">
     <!-- Contenu de la modal -->
        <div class="modal-content">
               <div class="modal-header">
                   <span class="close" id="croix" onclick="cacher();">&times;</span>
                   <h1>Genius Classroom: notify you</h1>
              </div>
              
              <div class="modal-body">
                   <p id="message_modal">D&eacute;sol&eacute; pour participer au chat de geniusclassroom vous devez faire parti de la communot&eacute; genius, connectez-vous et r&eacute;essayez</p>
             </div>

             <div class="modal-footer">
                <button onclick="cacher();">OK</button>
             </div>
       </div>
   </div>
	    <?php include('includes/entete.php'); ?>
        <?php include('includes/menu-navigation.php'); ?>
        <br>
        <div class="content">
        <?php include('includes/cote-gauche-commun.php');?>
	  <section class="centre-accueil">
	   <p class="geniusP">Genius Classroom: <b class="geniusB" style="color: #A12">Votre compte</b></p>
	   <div class="liendenavigation">
	   	<a href="#">info   </a>
	   	<a href="#"> Profil  </a>
	   	<a onclick="destruction_des_session();"> D&eacute;connexion</a>

	   	
	           
	   </div>
	   <!-- Image de profil de l'utilisateur -->
	   <div class="div_profil">
	   		<?php echo'<img src="'.$profil_image.'" class="profil_utilisateur" alt="Votre image de profile">';  ?>

	          <button class="profil_modify_btn" onclick="modifier_photo_profil();" id="modify_btn">Modifier </button>

	          <form method="post" action="Mon_compte.php" style="display: none;" enctype="multipart/form-data" id="form_profil">
	          	<input type="file" name="photo" required id="value" class="file_btn">
	          	<input type="submit" name="sumbit_profil_btn" value="Appliquer" onclick="modifier_photo_profil_applique();">
	          	<input type="button" name="annuler" value="Annuler" onclick="annuler_modify_profil();">
	          </form>
	    </div>   
	    <!-- Changement de photo de profil -->
	    <?php
	        $tof_profil = NULL;
            $chemin  = NULL;
            $chemin_temporaire = NULL;
            $source = NULL;
	    if (isset($_POST['sumbit_profil_btn'])) {
	    	// recuperation du nombre de nom actuelle de l'image
             $rename = $bdd->prepare('SELECT profil FROM visiteur WHERE pseudonyme = ?');
             $rename->execute(array($_SESSION['pseudo']));
             $ligne_profil =  $rename->fetch();
             $image_name = $ligne_profil['profil'];
             echo '<script> alert("'.$image_name.'");</script>';
             $name_suite = substr($image_name, 11);
             $rename->closeCursor();

             

              /******************************************************
              *****Traitement de l'image entree par l'utilisateur****
              *******************************************************/

               // Recuperation de l'extention du fichier
              $info_file = pathinfo($_FILES['photo']['name']);
              $extension = $info_file['extension']; //l'extention
              // $image_name = basename($_FILES['sumbit_profil_btn']['name']);
              // tableau d'extentions autorises
             $new_name = NULL;
             $bool = indice_search($image_name); //numero de l'ancienne
             if ($bool == true) {
               $nombre_mvisiteur++;
               $new_name = 'usr_profil/'.$nombre_mvisiteur.'.'.$extension;
             }else{
             	$new_name = 'usr_profil/'.indice_search($image_name).'.'.$extension;
             array_map('unlink', glob($image_name)); // Suppresion de l'image
             }

              $insertion_autorise_table = array('jpg', 'jpeg', 'png', 'gif');
             if (in_array($extension, $insertion_autorise_table)) 
             {
                $chemin_temporaire = 'profil_tmp/'.$name_suite;
                move_uploaded_file($_FILES['photo']['tmp_name'], $chemin_temporaire);
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
                imagegif($destination, $new_name);
              }else if ($extension == 'jpeg' OR $extension == 'jpg') {
                imagejpeg($destination, $new_name);
              }elseif ($extension == 'png') {
                imagepng($destination, $new_name);
              }
              $chemin = $new_name;
              

           
          }else{
            $chemin = 'usr_profil/utilisateur.png';
          }
          //Suppresion du repertire temporaire ou ont ete stockees les image
          array_map('unlink', glob('profil_tmp/'.'*.png'));
          array_map('unlink', glob('profil_tmp/'.'*.jpg'));
          array_map('unlink', glob('profil_tmp/'.'*.jpeg'));
          array_map('unlink', glob('profil_tmp/'.'*.gif'));

           $req_profil = $bdd->prepare('UPDATE visiteur SET profil  = :chemin');
           $req_profil->execute(array('chemin' => $chemin));


	     ?>   

<div class="mon_compte_center">
	   <div class="contenu-compte">
	   	 <div class="contenu-title"><b>Compte</b></div>
	      <p> 
	   		<strong>Pseudo: </strong><?php echo $_SESSION['pseudo'];  ?> <br/>
	   		<strong>Site Web: </strong> N/A<br/>
	   		<strong>E-mail: </strong> <?php echo$ligne['addresse_email'];  ?><br/>
	   		<strong>Date d'arriv&eacute;e: </strong> <?php echo$ligne['date_arrivee'];  ?><br/><br/>
	     </p>
	   </div>

	   <br>
	 

	   <div class="contenu-compte">
	   	 <div class="contenu-title"><b>Vos Stats</b></div>
	  <div><b>Nom <mark>Compteur</mark></b></div>
	   	  <p> 
	   		<strong>Commentaires post&eacute;s: </strong><br/>
	    </p>
      </div>

      <br>
      <div class="contenu-compte">
	   	 <div class="contenu-title"><b>Vos 10 derniers messages</b></div>
	  <?php
	  if ($nombre_message >0 ) {
	  	 while ($linges = $re_chat->fetch()) 
	  	 {
	   		  echo $linges['le_message'].'<br>';
         }
	  }else{
	 
	  	echo "<p>Vous n'avez posté aucun messages</p>";
	  	}
	   ?>
	  
      </div>

      <br>

      <div class="contenu-compte">
	   	 <div class="contenu-title"><b>Vos 10 derniers Commentaires</b></div>
	   	 <?php 
	   	 if ($nombre_com >0) {
	   	 	while ($ligne = $re_com->fetch()) {
	   	 		echo $ligne['message'].'<br>';
	   	 	}
	   	 }else{
	   	 	echo "<p>Vous n'avez posté aucun commentaires</p>";
	   	 }
	   	  ?>
	   
      </div>

      </div>







	  </section>



    <?php include('includes/cote-droit-commun.php'); ?>


</div>

  <?php include('includes/footer.php'); ?>
</body>
</html>