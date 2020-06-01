<?php session_start();  ?>
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

        <div class="content">
       <?php include('includes/cote-gauche-commun.php');?>
 
      
 

        <section class="centre-accueil">
            <p class="geniusP"><i><b class="geniusB">geniusclassroom<br> </b>
                 partenariat </i></p>
          <section class="description">
            <h1><p class="text-declaration">Partenariat</p></h1>
            
            <p  style="text-align: left;padding-left: 10%">
            Voici les conditions requises pour pouvoir faire votre partenariat avec nous: </p><br>
            <div style="text-align: left;padding-left: 10%">    
            <ol>
                <li>Ne pas &ecirc;tre un site nouveau !</li>
                <li>Ne pas &ecirc;tre un site de ddl !</li>
                <li>Avoir un minimum de contenu !</li>
                <li> Avoir un minimum de visiteurs</li>
                <li>Avoir un rapport avec l'&eacute;ducation en milieu scolaire</li>
               </ol>
            
            </div><br>
                        <h1><p class="text-declaration">Les liens vers geniusclassroom</p></h1>
            

            
            <div style="text-align: left;padding-left: 10%;margin:auto">    
              Que vous soyez un partenaire ou non, <strong>vous pouvez utiliser les liens</strong> menant sur des pages de notre site. Pour la facult&eacute; des sciences de l'Universit&eacute; de Dschang dont nous diffusons les cours au format pdf, cela vous offre la possibilit&eacute; de cr&eacute;er une page DLL sur votre site et d'y mettre ces liens.<br><br>
                Nous vous rappelons toutefois qu'il est <strong>strictement interdit d'utiliser des liens directs</strong> vers les t&eacute;l&eacute;chargements des cours pr&eacute;sents sur ce site: Les visiteurs sont une de nos ressources, et nous en avons besoin. Pr&eacute;f&eacute;rez donc utiliser des liens vers des pages de t&eacute;l&eacute;chargement qui  permetten ainsi de voir la description du site.<br>
                <!-- Exemple ok: <a href="faculte-des-sciences.html"> Cours BIO 151 Langue Fran&ccedil;aise I</a> -->
            
            </div><br>
             
             </section>
                
              
            
            
       
        </section>
        <?php include('includes/cote-droit-commun.php');  ?>
        kbkkb
        </div>
        av footer
         <?php include('includes/footer.php');  ?>
         af footer
        
        <script type="text/javascript">
           var modal_content;

            modal_content = document.getElementById('mymodal');
            if (modal_content.getAttribute('click') == '1') 
            {
            modal_content.onclick = function(e)
            {
                 var modal = document.getElementsByClassName('modal-content')[0];
                 modal.style.borderColor = 'red';
            };
            }
        </script>
        
    
    </body>








</html>