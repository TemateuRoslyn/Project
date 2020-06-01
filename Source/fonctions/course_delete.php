<?php
session_start(); 
include('../includes/connexion.php');
include('my_game_function.php');

if (isset($_GET['id'])) 
{
	$req_delete = $bd->prepare('DELETE FROM '.pseudo_transforme($_SESSION['pseudo']).' WHERE id = :lid');
	$req_delete->execute(array('lid' => $_GET['id']));
}

 // Affichage
?>
      	<h1 class="geniusP"><b class="geniusB">Espace personnel d&eacute;di&eacute; &agrave;:   </b><b style="color: #A12;"><?php echo$_SESSION['pseudo'];?></b></h1>
      	<h1 class="geniusP"><i>Mon parcours sur <b style="color: #A12;">geniusclassroom</b></i></h1>
       
        <div class="information-personnels">
      	<p><mark>Date d'arriv&eacute;e:</mark><br><br> 
      		<?php 
      		 try{
               $bdd = new PDO('mysql:host=localhost;dbname=genius_classroom','root','');
      		 }catch(Exception $e){
      		 	die('Erreur: '.$e->getMessage());
      		 }
      		// $reponse = $bdd->query('SELECT date_arrivee FROM visiteur WHERE pseudonyme = '.$_SESSION['pseudo'].'');
      		 //$req = $bdd->prepare('SELECT date_arrivee FROM visiteur WHERE pseudonyme = ?'); 
      		 //$req->execute(array($_SESSION['pseudo'])); 
    // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars) 
      		 $reponse = $bdd->query('SELECT date_arrivee  FROM visiteur WHERE pseudonyme =\''.$_SESSION['pseudo'].'\'');
           while ($donnees = $reponse->fetch()) {
              echo'<b>Vous nous avez rejoint &agrave; cette datte:</b> '.htmlspecialchars($donnees['date_arrivee']).'<br>'; 
          }
          echo'</p>';
          echo'<mark>Nombre de cours t&eacute;l&eacute;charg&eacute;s au total:</mark><br> <br><b>Vous avez t&eacute;l&eacute;charg&eacute;:   </b>';
          $reponse = $bdd->query('SELECT nombre_cours_suivis  FROM visiteur WHERE pseudonyme =\''.$_SESSION['pseudo'].'\'');
          while($donnees = $reponse->fetch()){
          	$nb = $donnees['nombre_cours_suivis'];
          	echo''.htmlspecialchars($donnees['nombre_cours_suivis']).' pour l\'instant !! <br><br>';

          }
          echo "</div> ";
          		$reponse = $bdd->query('SELECT *  FROM '.pseudo_transforme($_SESSION['pseudo']));

          		/**********Affichage des cours seon un tableau***********/
          		if($nb == 0){
          			echo'<b class="pas_encore_telecharger_de_cours">Mettez votre liste &agrave; jour <a href="faculte-des-sciences.php">DOWNLOAD</a></b><br/><br/><br/><br/><br/><br/>';
          		}else{
          		echo'<b class="add_new_course">Pour ajouter un nouveau cours cliquez <a href="faculte-des-sciences.php">ici</a>.</b> 
          		 	 <table border="1" class="tableau-cours" id="course-table">
 					 <thead>
 					 	<tr style="background-color: beige">
 					 	 <th>Code UE<br>Le code</th>
             <th>Intitulé UE/Cours<br>UE/Course Title</th>
 					 	 <th>Action</th>
 					 	</tr>
 					</thead>
 					<tbody>';
          		
          			
          		 while($donnees = $reponse->fetch()){
          		 	   echo '<tr style="background-color: beige">';
          				echo'<td>'; echo $donnees['id']; echo'</td>';
              echo'<td><a href="'.$donnees['course_link'].'">'; echo $donnees['course_title']; echo'</a></td>';
 		     			echo'<td><a onclick="course_delete('.$donnees['id'].');">'; echo 'Supprimer'; echo'</a></td>';
 		     			//echo'<td>'; echo $donnees['course_link']; echo'</td>';
 		     	    echo'</tr>';

                 }
                 echo '</tbody> </table>';

                 }
                 

          	
          




     ?>





 