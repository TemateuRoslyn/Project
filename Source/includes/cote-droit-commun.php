         <?php  
          $annee = date('Y');
 		  $mois = date('m');
          $jour = date('d');
          $heure = date('H');
 		  $minutes = date('i');
          $seconde = date('s');
          $date_complete = $annee.'-'.$mois.'-'.$jour.' '.$heure.':'.$minutes.':'.$seconde; 

         ?>

          <aside class="menu-droit">

          <!--   <div class="image-content"><img class="image image1" src="Ressources/1.gif" title="Le compte à rebour est lancé, débutez avec le e-learning dès maintenants"></div> -->
            <div class="image-content"><img class="image image2" src="Ressources/2.gif" title="Genius Classroom Votre site de e-learning préféré !"></div>
            <div class="image-content"><img class="image image3" src="Ressources/3.gif" title="Acronyme: un partenaire fiable"></div>
     
      <div class="Commentaire">
			<b class="Commentaire_title">Commentaire <span onclick="reduir_com();" title="R&eacute;duire la liste">&times;</span>
			</b>
			<p>dans vos postes rassurez-vous de rester toujours courtois et respectez les autres menbres</p>
			<div class="commentaire_publics" id="voir_com" onclick="traitement_commentaire_secondaire()">Voir les commentaire</div>
			
			<div class="com_INVERSE" id="com_INVERSE">
				<div class="mon_iccone"><?php echo getFirstCharToUpper($_SESSION['pseudo']); ?></div>
				<div class="commentaire_public" onclick="traitement_commentaire();">Ajouter un commentaire publique...</div>
			</div>
				

		
		 <form action="includes/post_commentaire.php" method="post" class="Commentaire_form" id="Commentaire_form">
			<div class="inverse">
				<!-- <div classe="logo_user">R</div> -->
				<textarea type="text" name="commentaire" placeholder="Tapez votre commentaire ici..." id="idmessage_com"></textarea>
				<?php	echo'<input type="hidden" name="pseudo_post" value="'.$_SESSION['pseudo'].'" id="pseudo_post"> ';  ?>
			</div>
			
			<div>
				<input type="submit" name="post" onclick="return post_commentaire();">
	  		 </div>
		</form>

		<div class="liste_commentaire" id="liste_commentaire">
			<?php
			$req_com = $bd->prepare('SELECT * FROM commentaires ORDER BY :ordre  LIMIT :debut, :nbr_entrees');

			$req_com ->bindValue(':ordre', 'id DESC', PDO::PARAM_STR);
			$req_com ->bindValue(':debut', 0, PDO::PARAM_INT);
			$req_com ->bindValue(':nbr_entrees', 10, PDO::PARAM_INT);

			$req_com->execute();

			while($ligne = $req_com->fetch()){
				if (strtolower($_SESSION['pseudo']) == strtolower($ligne['pseudo'])) {
				echo'  <div class="post_INVERSE">
							<div class="mon_iccone">'.getFirstCharToUpper($ligne['pseudo']).'</div>
				        	<div class="commentaire_post commentaire_post-'.$ligne['id'].'" message="'.$ligne['message'].'">
				        	       <p>'.$ligne['pseudo'].'&#8226;<i>'.changedate($ligne['date_publication']).'</i>
				        	       </p>
									<b class="comm_message" id="com-'.$ligne['id'].'">'.$ligne['message'].'</b>
							    <div class="com_option_bottom">
							        <span class="delete_com" onclick="delete_commentaire('.$ligne['id'].');">Supprimer</span>
							        <span class="modify_com modify_com-'.$ligne['id'].'" bool="false" onclick="modify_commentaire('.$ligne['id'].');">Modifier</span>
							    </div>		
							</div>

						</div>	'
					;
					}else{
						echo'  <div class="post_INVERSE">
							<div class="mon_iccone">'.getFirstCharToUpper($ligne['pseudo']).'</div>
				        	<div class="commentaire_post" message="'.$ligne['message'].'">
				        	       <p>'.$ligne['pseudo'].'&#8226;<i>'.changedate($ligne['date_publication']).'</i>
				        	       </p>
									<b class="comm_message" id="'.$ligne['id'].'">'.$ligne['message'].'</b>
							</div>

						</div>	'
					;

					}
			}
			$req_com->closeCursor();


			function getFirstCharToUpper($string)
			{
				$str = substr($string, 0, 1);
				return strtoupper($str);
			}
			function changedate($date)
			{
				$str = str_replace(" ", ' &agrave ', $date);
				return 'le '.$str;
			}
			?>
		</div>
      </div>
      <script type="text/javascript">

      	function traitement_commentaire_secondaire()
      	{
      		document.getElementById('com_INVERSE').style.display = 'flex';
      		// document.getElementById('Commentaire_form').style.display = 'block';
      		document.getElementById('liste_commentaire').style.display = 'block';
      		document.getElementById('voir_com').style.display = 'none';
      	}


      	function traitement_commentaire()
      	{
      		document.getElementById('com_INVERSE').style.display = 'none';
      		document.getElementById('Commentaire_form').style.display = 'block';
      		document.getElementById('liste_commentaire').style.display = 'block';
      		document.getElementById('voir_com').style.display = 'none';

      	}
      	// Modifier le commentaire seclectionner dans la base de donnees
      	function modify_commentaire(id)
      	{
      		var str,element,message,com, bool,newMessage;
            
      		bool = document.getElementsByClassName('modify_com-'+id)[0];
      		if (bool.getAttribute('bool') == 'false') 
      		{
      			element = document.getElementsByClassName('commentaire_post-'+id)[0];
      			com = element.getAttribute('message');
      			message = document.getElementById('com-'+id);
      			message.innerHTML = '<textarea col="40" class="com_textarea" id="com_textarea">'+com+'</textarea>';
      			bool.innerHTML = 'Appliquer';
      			bool.setAttribute('bool', 'true');
      		}else{
      			newMessage = document.getElementById('com_textarea').value;
            document.getElementsByClassName('commentaire_post-'+id)[0].setAttribute('message', newMessage);
      			modify_commentaire_etap_finale(id,newMessage);


      		}

      	}
      	function modify_commentaire_etap_finale(id,message)
      	{
      			var xhr, bool, element, boolean;
      			boolean = document.getElementsByClassName('modify_com-'+id)[0];
      			boolean.setAttribute('bool', 'false');
      			element = document.getElementsByClassName('commentaire_post-'+id)[0];
     if(window.XMLHttpRequest){
        xhr = new XMLHttpRequest();
        bool = true;

     }else if (window.ActiveXObject) {
       xhr = new ActiveXObject("Microsoft.XMLHTTP");
       bool = true;
     }else{
         alert("Ce navigateur ne peut pas effectu&eacute; des requ&ecirc;s sur le serveur");
     }
     if (bool == true) 
     {
        xhr.open("get", 'fonctions/modify_commentaire.php?id='+id+'&message='+message, true);
        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById('liste_commentaire').innerHTML = xhr.responseText;
            }
            if(xhr.status == 404)
            {
               document.getElementById('message_modal').innerHTML = "La page cible  est introuvable !!";
               pasinscrit();
            }
        }
        xhr.send(null);
     }

    return false;
      	}
      	// Supprimer le commentaire selectionnee dans la base de donnees
      	function delete_commentaire(id)
      	{
      		var xhr, bool;
     if(window.XMLHttpRequest){
        xhr = new XMLHttpRequest();
        bool = true;

     }else if (window.ActiveXObject) {
       xhr = new ActiveXObject("Microsoft.XMLHTTP");
       bool = true;
     }else{
         alert("Ce navigateur ne peut pas effectu&eacute; des requ&ecirc;s sur le serveur");
     }
     if (bool == true) 
     {
        xhr.open("get", 'fonctions/com_delete.php?id='+id, true);
        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById('liste_commentaire').innerHTML = xhr.responseText;
            }
            if(xhr.status == 404)
            {
               document.getElementById('message_modal').innerHTML = "La page cible  est introuvable !!";
               pasinscrit();
            }
        }
        xhr.send(null);
     }

    return false;
   }
      	function reduir_com()
      	{
      		document.getElementById('com_INVERSE').style.display = 'flex';
      		document.getElementById('Commentaire_form').style.display = 'none';
      		document.getElementById('liste_commentaire').style.display = 'none';
      		document.getElementById('voir_com').style.display = 'block';
      	}

function post_commentaire()
{

	var xhr, element, message, bool,pseudo;

	element = document.getElementById('idmessage_com');
	pseudo = document.getElementById('pseudo_post').value;

	message = element.value;
	element.value = '';
	element.placeholder = 'Tapez votre commentaire ici...';
	// element.style.borderColor = 'white';

	bool = false;
    for (var c in message) 
    {
       if (message[c] != ' ') {
       	bool = true;
       }
	}
	if(bool == false){
		return bool;
	}

	 if(window.XMLHttpRequest)
	 {
        xhr = new XMLHttpRequest();
     }else
     {

   	   if(window.ActiveXObject)
   	   {
	     xhr = new ActiveXObject("Microsoft.XMLHTTP");
	   }else
	   {
	   }
	 }
     
	   xhr.open("get", 'includes/post_commentaire.php?commentaire='+message+'&'+'pseudo='+pseudo, true);
	   xhr.onreadystatechange = function()
	    {

	  		if(xhr.readyState == 4 && xhr.status == 200)
	   		{
	   		    document.getElementById('liste_commentaire').innerHTML = xhr.responseText;
	   			// alert('page trouvee');
       		}else if(xhr.status == 404){
       			 alert('Page inaccesible');
       		}
 	    }
		 xhr.send(null);
	
   
	 return false;
      	}
      </script>
            
          </aside>