 <?php session_start();
   $_SESSION['conecte'] = true;
   
   include('includes/connexion.php');
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
       <script type="text/javascript" src="Scripts/session_destroy.js"></script>
        <title>UDS->GENIUS CLASSROOM</title>
    </head>
    
    <body onload="setTimeout(annimation(), 0);">

      <!--l'entete-->
       <?php include('includes/entete.php'); ?>

        <!-- Le menu -->
        <!--Principaux liens de Navigations-->
        <nav>
            <div class="LignePresentation">
              <ul>
                <li class="menu-Conexion"><a>BIENVENUE</a></li>
                <?php
                  echo'<li class=\"menu-Conexion\"><a class="user_conected_style">'.$_SESSION['pseudo'].'</a></li>'; ?>

                  <li class="menu-Conexion"><a href="Mon_compte.php">Mon compte</a></li>
                  <li class="menu-Incription"><a href="Mes_cours.php">Mes cours</a></li>
                  <li class="menu-password"><a  onclick="destruction_des_session();">D&eacute;connexion</a></li>
                  <!--<li class="menu-Forum"><a href="Forum.html">Forum</a></li>-->
                 <!-- <li class="menu-contacter"><a href="Nous-contacter.html">Nous contacter</a></li>-->
                 
              </ul>
            </div>
        
        </nav>
          <div class="content">

        <!--Le cote gauche-->
       <?php include('includes/cote-gauche-commun.php'); ?>

        <!--Le centre de la page-->

        <section class="centre-accueil">
            <p class="geniusP"><i><b class="geniusB">geniusclassroom<br> </b>
                 Accueil</i></p>
            <div class="content-block">
            <div class="img-block"><img src="Ressources/diplome1.jpg"> </div>
            <div class="text">
                <p class="p"> <b>Réussir à ces <br> examens de Fin d'année</b></p>
                <p class="p1">Apprenez à apprendre. <br> Découvrez les besoins et services de demain <br> Et prenez votre vie en main</p>
            </div>
            </div><br>
             <div class="content-block">
            <div class="img-block"><img src="Ressources/femme-d-affaires1.jpg"> </div>
            <div class="text">
                <p class="p"> <b>Une Formation de qualité<br> Facilite l'intégration<br>Dans la vie active</b></p>
                <p class="p1"><br>Gadez toujours le sourire</p>
            </div>    
            </div><br>
            
            <!--Section Université de Dschang-->
            
             <div class="content-block">
            <div class="img-block"><img src="Ressources/logo_UDS.png"> </div>
            <div class="text">
                <p class="p"> <b>Université <br>de Dschang</b></p>
                <p class="p1"><br>L'une des Meilleurs en Afrique:<br></p>
                 <table>
               <tr>
                <td><img src="Ressources/fleche-rouge.png" alt="L'image est momentannement indiponible"></td> 
                <td class="p1"><a href="https://www.univ-dschang.org">voir</a></td> 
               </tr>
            </table>
          </div>
            </div><br>
            
            <!--<table class="tableau-accueil">
              <tr>
                <td style="width: 200px;height: 260px; background-image: url(diplome1.jpg)"> </td>    
                  <td>Réussir à ces examens de Fin d'année </td>
              </tr>
            
            </table>-->
            
               
            
       
        </section>

        <!-- CETTE SECTION CONCERNE LE MENU  DROIT DU SITE -->

         <?php include('includes/cote-droit-commun.php');  ?>
        </div>
        
        <?php include('includes/footer.php');  ?>
        
        
        
    
    </body>








</html>