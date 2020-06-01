
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
    
    <body>
       <?php include('includes/entete.php'); ?>
        <?php include('includes/menu-navigation.php'); ?>
        <br>
        <div class="content">
        <?php include('includes/cote-gauche-commun.php');?>
         <section class="centre-accueil">
             <p class="geniusP"><i><b class="geniusB">geniusclassroom <br></b>
                 contact </i></p>
              <h2 class="text-declaration">Veuilliez remplir le formulaire ci-dessous puis cliquez sur envoyer</h2>   
             <form method="post", action="traitement.php" class="nouscontacter">
              
                 <!--*************************L'objet de la demande******************************-->
                 <label>Objet</label><input type="text" name="nom" size="75" placeholder="objet de votre demande">
                 <!--*************************Les informations de l'utilisateur******************************-->
             <?php echo' <label>Pdseudonyme :</label>  <input type="text" name="pdseudo" size="59" placeholder="tapez votre pseudonyme ici" required value="'.$_SESSION['pseudo'].'">'; ?>
              <label>Adresse Email :</label>  <input type="email" name="nom" size="50" placeholder="tapez votre login ici" required>
              <label for="pass">Mot de passe: </label><input type="password" name="pass" placeholder="tapez votre mot de passe" size="57" required>
                 <!--*************************Le message envoyé******************************-->
                 <label class="demandeenvoier">Message : </label> <textarea name="message"  cols="50" placeholder="tapez tous votre message dans ce champ"></textarea>
                 
                 <!--*******************                     <legend></legend>
******Cliquer sur envoyer******************************-->
                     <label class="demandeenvoier">Finalisez votre demande</label> 
                    <input type="submit" value="Envoyer" class="submitcontact">
              
            </form>
           
        
        </section>
         <!-- CETTE SECTION CONCERNE LE MENU  DROIT DU SITE -->

         <?php include('includes/cote-droit-commun.php');  ?>
        </div>
         <?php include('includes/footer.php');  ?>
        
        
        
    
    </body>








</html>