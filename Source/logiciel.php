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
       <script type="text/javascript" src="java_script_source_code.js"></script>
       <script type="text/javascript" src="Scripts/session_destroy.js"></script>
        <title>UDS->GENIUS CLASSROOM</title>
    </head>
    
    <body>
        <?php include('includes/entete.php'); ?>
        <?php include('includes/menu-navigation.php'); ?>
        <div class="content">        
        <?php include('includes/cote-gauche-commun.php');?>
        <section class="centre-accueil">
            <p class="geniusP"><i><b class="geniusB">geniusclassroom<br> </b>
                 logiceils</i></p>
            <h1 class="text-declaration">Des liens vers des logiciels jug&eacute;s importants</h1>
             
             <nav class="logicielPresentation">
            <div class="LignePresentation">
                   <ul>
                       <li><a><img src="logiciel-logos/google-chrome.jpg"></a></li>
                       <li><a><img src="logiciel-logos/installation-window-live.jpg"></a></li>
                       <li><a><img src="logiciel-logos/Microsoft-choice-guard.jpg"></a></li>
                       <li><a><img src="logiciel-logos/microsoft-office-power-pont.jpg"></a></li>
                      
                     
                   </ul>
                </div>
            </nav>
                
                <br>
            <nav class="logicielPresentation">
                 <div class="LignePresentation">
                  <li><a><img src="logiciel-logos/microsoft-visual-C++.jpg"></a></li>
                       <li><a><img src="logiciel-logos/microsoft-xna-framwork.jpg"></a></li>
                       <li><a><img src="logiciel-logos/teem-viewer.jpg"></a></li>
                       <li><a><img src="logiciel-logos/tweet-deck.jpg"></a></li>
                
                </div>
                </nav>
                
              
            
            
       
        </section>
          <?php include('includes/cote-droit-commun.php');  ?>
        </div>
          <?php include('includes/footer.php');  ?>
        
        
        
    
    </body>








</html>