<?php session_start(); ?>
<?php  include('includes/connexion.php'); ?>
        <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
       <!-- <link rel="stylesheet" href="disiegn.css">-->
        <link rel="stylesheet" type="text/css" href="CSS/responsive.css">

    <!--Style utilisee pour Smarphone-->
        <link rel="stylesheet" media="screen and (max-width: 1280px)"  href="CSS/responsive-design.css">
       <script type="text/javascript" src="Scripts/java_script_source_code.js"></script>
       <script type="text/javascript" src="Scripts/session_destroy.js"></script>
        <title>UDS->GENIUS CLASSROOM</title>
    </head>
    
    <body  id="begin">
        <?php include('includes/entete.php'); ?>
        <?php include('includes/menu-navigation.php'); ?>
        <div class="content">
        <?php include('includes/cote-gauche-commun.php');?>
        
         <section class="centre-accueil">
             <p class="geniusP">geniusclassroom <br></b>
                 FAQ </i></p>
             <p class="geniusP">Foire Aux Questionnaires</p>
             <div  class="fac-1">
                 <ol>
                     <li>Qu'est-ce qu'un gc-point ?</li>
                     <li>Rejoindre la team geniusClassroom</li>
                     <li>Quels sont les rangs ?</li>
                     <li>Mon post a été supprimé/locké pourquoi ?</li>
                     <li>Les gens sont méchants avec moi</li>
                     <li>Les modérateurs sont incompétents.</li>
                     <li>Je souhaite devenir uploader</li>
                 </ol>
             </div><br>
          <p class="geniusP">Réponses: </p>
              
             <div  class="fac-1">
                 <img src="Ressources/question.gif"> <b style="font-size: 20px">Qu'est-ce qu'un gc-point ?</b><br>
                  Vous-vous dite sans doute à ce instant que ce mot existe pas et se qu'il peut bien vouloire dire !
                  alors cessez de refléchir, ici ce qu'on appelle des gc-points sont en réalités des points que vous obtiendrez selon vos taux
                  d'activités/participations dans le chat et grace à ces points vous pouvez gravir les échelons. 
                  <div  class="fac-1-foot"><a href="#begin">Retourner au haut de page</a></div>
             </div><br>
             
              <div class="fac-1">
                 <img src="Ressources/question.gif"> <b style="font-size: 20px">Rejoindre la team geniusClassroom</b><br>
                 Pour nous ejoindre c'est facile, il suffit de poster sa candidature dans le chat:<br>
                 <a href="recrtement.html"> Recrutement-chat</a>
                  <div  class="fac-1-foot"><a href="#begin">Retourner au haut de page</a></div>
             </div><br>
             
             <div class="fac-1">
                 <img src="Ressources/question.gif"> <b style="font-size: 20px">Quels sont les rangs ?</b><br>
                 Tous les 50 messages vous grimmpez en echelon.
                 <ol>
                   <li>Simple aspirant 50</li>
                   <li>guerrier assidut 100</li>
                   <li>participant confirmé 150</li>
                   <li>aventurier 200</li>
                   <li>membre à part enti&egrave;re 250</li>
                   <li>participant confirmé 300</li>
                   <li>Ermite 400</li>
                   <li>ma&icirc;tre de guilde 500</li>
                   <li>Pilier 700</li>
                 
                 </ol>
                  <div class="fac-1-foot"><a href="#begin">Retourner au haut de page</a></div>
             </div><br>
             
               <div class="fac-1">
                 <img src="Ressources/question.gif"> <b style="font-size: 20px">Mon post a été supprimé/locké pourquoi ?</b><br>
                 Avant de poster quoi que se soit, assurez-vous qu'un autre post ne traite pas d&eacute;j&agrave; de votre sujet.
                    Cela ne sert à rien d'avoir plusieurs topics sur le m&ecirc;me sujet.
                  <div  class="fac-1-foot"><a href="#begin">Retourner au haut de page</a></div>
             </div><br>
             
             <div class="fac-1">
                 <img src="Ressources/question.gif"> <b style="font-size: 20px">Les gens sont méchants avec moi</b><br>
                 Respectez les r&egrave;gle du chat et vous n'aurez pas de probl&egrave;mes.
                  <div class="fac-1-foot"><a href="#begin">Retourner au haut de page</a></div>
             </div><br> 
             
             <div  class="fac-1">
                 <img src="Ressources/question.gif"> <b style="font-size: 20px">Les modérateurs sont incompétents.</b><br>
                Ah bah &ccedil;a oui, il suffit que vous fassiez une demande pour que je le devinne
                  <div  class="fac-1-foot"><a href="#begin">Retourner au haut de page</a></div>
             </div><br>
             
             <div class="fac-1">
                 <img src="Ressources/question.gif"> <b style="font-size: 20px">Je souhaite devenir uploader</b><br>
                Les uploaders sont recrut&eacute;s par les admins quand c'est n&eacute;c&eacute;ssaire. Tout le monde sera averti par une news.
                  <div  class="fac-1-foot"><a href="#begin">Retourner au haut de page</a></div>
             </div><br>
                 
           
        
        </section>
         <!-- CETTE SECTION CONCERNE LE MENU  DROIT DU SITE -->

         <?php include('includes/cote-droit-commun.php');  ?>
        </div>
        <?php include('includes/footer.php');  ?>
        
        
        
    
    </body>








</html>