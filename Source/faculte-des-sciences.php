<?php session_start(); ?>
<?php  include('includes/connexion.php'); ?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
       <!-- <link rel="stylesheet" href="disiegn.css">-->
        <link rel="stylesheet" type="text/css" href="CSS/responsive.css">
        <link rel="stylesheet" type="text/css" href="CSS/fs-filiere.css">

    <!--Style utilisee pour Smarphone-->
    <script type="text/javascript" src="Scripts/session_destroy.js"></script>
        <link rel="stylesheet" media="screen and (max-width: 1280px)"  href="CSS/responsive-design.css">
     <script type="text/javascript" src="Scripts/display-uv.js"></script>
     <script type="text/javascript" src="Scripts/add-uv-to-data-base.js"></script>
        <title>UDS->GENIUS CLASSROOM</title>
        
    </head>
    <!--***************************************************
        ***************************************************
        ICI COMMENCE LE CORPS DU CODE :   BALISE BODY
        ***************************************************
        ***************************************************-->
    
    <body>
       
        <!--l'entete-->
       <?php include('includes/entete.php'); ?>
        <!--Principaux liens de Navigations-->
        <?php include('includes/menu-navigation.php'); ?>
        <div class="content">
        <?php include('includes/cote-gauche-commun.php'); ?>
         
        <section class="centre-accueil" id="idSection">
           <h2 class="geniusP"><i><b class="geniusB">Bienvenu &agrave; la facult&eacute; des sciences de l'universit&eacute; de Dschang </b>
                </i></h2>

                <h1 class="text-declaration">Selectionnez votre fili&egrave;re et commencez la navigation</h1>
            <div class="filieres">
                <div class="bulle-filier ba" id="ba 10" onclick="display('1', '11')">BA</div>
                <div class="bulle-filier bc" id="bc 12" onclick="display('2', '12')">BC</div>
                <div class="bulle-filier bv" id="bv 13" onclick="display('3', '13')">BV</div>
                <div class="bulle-filier ch" id="ch 14" onclick="display('4', '14')">CH</div>
                <div class="bulle-filier in" id="in 15" onclick="display('5', '15')">IN</div>
                <div class="bulle-filier ma" id="ma 16" onclick="display('6', '16')">MA</div>
                <div class="bulle-filier st" id="st 17" onclick="display('7', '17')">ST</div>
                <div class="bulle-filier phy" id="phy 18" onclick="display('8', '18')">PHY</div>
           </div>

               <!-- Dans cette div sera afficher le contenu d'une matiere  -->
               <div class="matiere" page-a-inclure="filieres/ba.php" page-courante="false" id="1"></div>
               <div class="matiere" page-a-inclure="filieres/bc.php" page-courante="false" id="2"></div>
               <div class="matiere" page-a-inclure="filieres/bv.php" page-courante="false" id="3"></div>
               <div class="matiere" page-a-inclure="filieres/chimie.php" page-courante="false" id="4"></div>
               <div class="matiere" page-a-inclure="filieres/informatique.php" page-courante="false" id="5"></div>
               <div class="matiere" page-a-inclure="filieres/mathematique.php" page-courante="false" id="6"></div>
               <div class="matiere" page-a-inclure="filieres/st.php" page-courante="false" id="7"></div>
               <div class="matiere" page-a-inclure="filieres/physique.php" page-courante="false" id="8"></div>
               <img src="Ressources/aincrad.jpeg" id="image-science">
           
            </section>

             
             <?php include('includes/cote-droit-commun.php'); ?>
            
          

            <!-- Fermeture de content -->
             </div>
                
            
            <!-- Inclusion du footer -->
        <?php include('includes/footer.php'); ?>
        
        
        
    
    </body>

</html>