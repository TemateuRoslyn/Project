<?php include('includes/connexion.php'); ?>
<?php session_start();  ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
       <!-- <link rel="stylesheet" href="disiegn.css">-->
        <link rel="stylesheet" type="text/css" href="CSS/responsive.css">

    <!--Style utilisee pour Smarphone-->
        <link rel="stylesheet" media="screen and (max-width: 1280px)"  href="CSS/responsive-design.css">
        <link rel="stylesheet" href="CSS/modal_box.css">
       <script type="text/javascript" src="Scripts/java_script_source_code.js"></script>
       
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
                   <p id="message_modal">Ce compte n'existe pas, veuillez r&eacute;essayer, dans le cas contraire inscrivez-vous de nouveau</p>
             </div>

             <div class="modal-footer">
                <button onclick="cacher();">OK</button>
             </div>
       </div>
   </div>

        <header> 
            <div class="ensemble">
              <b class="genius_title"> Genius Classromm: L' &eacute;ducation pour tous !! </b>
              
              <div class="div_description">
                <button onclick="showdescription();" id="description_btn" ondblclick="hidedescription();">Voire la description</button>

                <b class="description_site" id="description_site">
                  Genius Classromm est un site web de e-learning mis sur pied par l' &eacute;quipe genius dans le but de mettre &agrave; la disposition des &eacute;tudiants de la facult&eacute; des sciences de l'universit&eacute; de Dschang les cours au format pdf, de fournir &agrave; chaque &eacute;tudiant un espace de travail simplifi&eacute; o&ugrave; il pourra s'&eacute;panouir dans ses &eacute;tudes. 
                </b>
                              </div>
            </div>
            <!--<div class="Aincrad">
            <img src="aincrad1.jpg">
        </div>-->
            
        </header>
         <script type="text/javascript">
          function showdescription()
          {
            document.getElementById('description_site').style.display = 'block';
            var btn = document.getElementById('description_btn');
            btn.innerHTML = 'Double click pour<br> cacher la description';
            btn.style.marginTop = 'initial';
          }
          function hidedescription()
          {
            document.getElementById('description_site').style.display = 'none';
            document.getElementsByClassName('ensemble')[0].style.marginBottom = '10px';
            var btn = document.getElementById('description_btn');
            btn.innerHTML = 'Voire la description';
            btn.style.marginTop = '10px';
          }
        </script>

        <!--Principaux liens de Navigations-->
        <nav>
            <div class="LignePresentation">
              <ul>
                  <!--<li class="menu-accueil"><a href="Accueil.html">Accueil</a></li>-->
                  <li class="menu-bienvenue"><a>BIENVENUE</a></li>
                  <li class="menu-Conexion"><a href="Conexion.html">Conexion</a></li>
                  <li class="menu-Incription"><a href="Incription.html">Incription</a></li>
                  <li class="menu-password"><a href="password.html">Mot de passe perdu ?</a></li>
                  <!--<li class="menu-Forum"><a href="Forum.html">Forum</a></li>-->
                 <!-- <li class="menu-contacter"><a href="Nous-contacter.html">Nous contacter</a></li>-->
              </ul>
            </div>
        
        </nav>

         <div class="content">
            <!--Le cote gauche-->
  <div class="menu-gauche">
          <div class="ex-menu-gauche">
            <aside class="aside">
                 <div class="titles">Le site </div>
                 <div><a href="../Projet-web.html">ACCUEIL</a></div>
                 <div><a href="faq.html">FAQ</a></div>
                 <!-- <div><a href="contact.html">CONTACT</a></div> -->
           </aside>
           <aside class="aside1">
                <div class="titles">M&eacute;dias</div>
                <div><a onclick="autorise_download();" style="text-decoration: underline;color:blue">DOWNLOAD</a></div>
                <!-- <div><a href="licence.html">LICENCIE</a></div> -->
                <div><a href="logiciel.html">LOGICIELS</a></div>
           </aside>
           <aside class="aside2">
                <div class="titles">&Eacute;changes</div>
                <div><a onclick="autorise_chat();" style="text-decoration: underline;color:blue">CHAT</a></div>
                <div><a href="partenariat.html">PARTENARIAT</a></div>
           </aside>

      </div>
      
  <div class="publicite">
         <p> Nous r&eacute;joindre sur les r&eacute;so-sosiaux</p>
          <ul>
            <li><a href=""><img src="Ressources/instagramm.png" class="icone-insta"></a></li>
            <li><a href="geniusclassroom-viber"><img src="Ressources/viber.png" class="icone-viber"></a></li>
            <li><a href="geniusclassroom-fb@gmail.com"><img src="Ressources/face-book.png" class="icone-fb"></a></li>
            <li><a href="geniusclassroom-viver-youtube@gmail.com"><img src="Ressources/youtube-logo-hd-8.png" class="icone-youtube"></a></li>
<!--             <li><a href=""><img src="Ressources/whatsapp.png" class="icone-whatsapp"></a></li>
 -->
            
          </ul>
      </div>
   </div> 

        <section class="centre-accueil">
             <p class="geniusP"><i><b class="geniusB">geniusclassroom <br></b>
                 Modifier votre mot de passe &eacute;tape 2 </i></p>
              <h2 class="text-declaration">Veuilliez remplir le formulaire ci-dessous pour recevoir votre nouveau passe-genius</h2>   
            
             <form method="post"action="tritement-passe.php" class="nouscontacter" id="idFormulairePassModify" style="display: none;">
              <?php $new_passe = random_int ( 100000 , 999999); ?>
                 <!--*************************Les informations de l'utilisateur******************************-->
             
              <label>Tapez votre mot de passe: <?php  echo$new_passe;  ?></label>  <input type="password" name="passe" size="50" placeholder="Tapez votre mot de passe ici..." required id="passe">
              <label>Confirmez votre mot de passe:</label>  <input type="password" name="pass-confirme" size="50" placeholder="Confirmez votre mot de passe" required id="pass-confirme">
              
                     <label class="demandeenvoier">Vider les champs</label> 

                    <input type="reset" value="Restaurer" class="champ_reset">
                 
                     <label class="demandeenvoier">Validez votre demande</label>
                     <?php  
                     
                    echo'<input type="submit" value="Envoyer" class="submitcontact" onclick="return last_passe_verify('.$new_passe.');">';
                    
                    ?>
              
            </form>
            <!-- Dans le cas ou la verification par mot de passe est correcte -->
            <?php 
            if (isset($_POST['passe'])) {
              // Modification du nouveau mot de passe dans la base de donnees
              $new_passe = sha1($new_passe);
              $req_modify_passe = $bd->prepare('UPDATE visiteur  SET password = :newPasse WHERE addresse_email = :email');
              $req_modify_passe->execute(array('newPasse' => $new_passe, 'email' => $_SESSION['email']));
              // header('Location: Projet-web.php'); 

              echo "<script> window.location = 'Projet-web.php'; </script>";

              
            }



             ?>
            <!-- verification de l'existance du compte -->
                    <?php 

                    if (isset($_POST['email'])) {
                      
                    
                    $email = $_POST['email'];
                    $_SESSION['email'] = $_POST['email'];
                    $req_verify = $bd->prepare('SELECT *  FROM visiteur WHERE addresse_email = :email');
                    $req_verify->execute(array('email' => $email));
                    $data = $req_verify->fetch();
                    $req_verify->closeCursor();
                    $mail_visiteur = $data['addresse_email'];
                    $_SESSION['pseudo'] = $data['pseudonyme'];
                    if (strlen($data['addresse_email']) == 0) {
                      echo "<script>
                       document.getElementById('message_modal').innerHTML = 'Ce compte n\'existe pas, si le probl&egrave;me persite veuillez contactater le web-master dans le cas contraire inscrivez-vous de nouveau !!';
                            var modal = document.getElementById('mymodal');
                            modal.style.display = 'block';
                            modal.setAttribute('click', '1');
                           </script>";
                    }else{
                      // le compte existe et l'envoie du mal de confirmation s'effectue 
                      $destinataires = $mail_visiteur;
                      $sujet = "Modification de mot de passe";
 
                      // en-têtes expéditeur
                      $entetes = "From : Genius Classromm.com<br>";
 
                      // en-têtes adresse de retour
                      $entetes .= "Reply-to : geniusclassroom@gmail<br>";
 
 
                      mail($destinataires, $sujet, 'Votre nouveau ,ote de passe <br> '.$new_passe.' copiyez-le et remplissez les champs sans vous tromprer', $entetes);
                       echo "<script>
                       document.getElementById('idFormulairePassModify').style.display = 'block';

                        document.getElementById('message_modal').innerHTML = 'Veuillez fournir le mot de passe qui vous a été envoyé par E-mail !';
                            var modal = document.getElementById('mymodal');
                            modal.style.display = 'block';
                            modal.setAttribute('click', '1');
                           </script>";
                    }
                  }
                     ?>
        
        </section>
        
        </div>
        <footer> <p>COPYRIGHT 2020 <b>geniusclassroom</b> ALL RIGHT RESERVED</p></footer>
        
    
    </body>








</html>