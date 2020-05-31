<?php session_start();
 include('includes/connexion.php'); ?>
<?php // Connexion à la base de données 
    try { 
    $bdd = new PDO('mysql:host=localhost;dbname=genius_classroom', 'root', ''); 
    } catch(Exception $e) {        
    die('Erreur : '.$e->getMessage()); 
    }  

    $req_pseudo = $bdd->query('SELECT pseudonyme FROM visiteur ORDER BY pseudonyme');
    ?>
<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
       <!-- <link rel="stylesheet" href="disiegn.css">-->
        <link rel="stylesheet" type="text/css" href="CSS/responsive.css">
        <link rel="stylesheet" type="text/css" href="CSS/chat-style.css">

    <!--Style utilisee pour Smarphone-->
        <link rel="stylesheet" media="screen and (max-width: 1280px)"  href="CSS/responsive-design.css">

       <script type="text/javascript" src="Scripts/java_script_source_code.js"></script>
       <script type="text/javascript" src="Scripts/send-message.js"></script>
       <script type="text/javascript" src="Scripts/session_destroy.js"></script>
        <title>UDS->GENIUS CLASSROOM</title>
    </head>
    
    <body onload="setTimeout(hidden_link('message-link'), 0);">
      <?php include('includes/entete.php'); ?>
        <?php include('includes/menu-navigation.php'); ?>
        <div class="content contentS">
        <?php include('includes/cote-gauche-commun.php');?>

        <section class="centre-accueil">

      <br>
      <h1 class="lechat"><i>Le chat</i></h1><br>
      <div class="contenu contenu-chat">
        <span class="iconedefilement" style="display: none;">DD</span>
        <!-- Entete du chat -->
        <div class="entete-chat">
          
          <div class="logo-genius">GC</div>
          <div class="chat-crew">Genius Classroom: Le chat
           <div class="nom_membres">
            <?php  
               while ($lines = $req_pseudo->fetch()) {
                 echo $lines['pseudonyme'].', ';
               }
            ?>
              
            </div>
          </div>
          <div class="animation-chat"></div>
        </div>
   <div class="chat" id="chatts">

  <?php 
  
    // Récupération des 10 derniers messages 
    $reponse = $bdd->query('SELECT * FROM chat'); 
     $id = 0;
     while ($donnees = $reponse->fetch()) { 
          /*********************************************************************************************
      *********************************************************************************************
      ***************ssi le message est celui de l'utilisateur courant************************
      *********************************************************************************************
      *********************************************************************************************/
        if (strtolower($donnees['le_pseudo']) == strtolower($_SESSION['pseudo'])) 
        {

              // Ici je vais tester si le lien eiste
            if ($donnees['filiature'] == 1) 
            {
              if ($donnees['message_link'] == '') 
               {
              // Si jamais le message a insere ne contient pas de lien vers un autre message
                    echo '<div class="monMessages monMessagess" title="Cliquez pour répondre à ce message">
                         <div class="monMessage message">
                             <div class="le-messages" onclick="linkage('.$id.');" id="'.$id.'" pseudosession="'.strtolower($_SESSION['pseudo']).'" couleur="rgb(1,110,100)" pseudo="'.strtolower($donnees['le_pseudo']).'" maestros="1" message="'.htmlspecialchars($donnees['le_message']).'">
                                '.color_pseudo(htmlspecialchars($donnees['le_message'])). '
                             </div>
                         <div class="ladates"> 
                         <i class="dates">'.htmlspecialchars($donnees['date_time']).'
                         </i>
                       </div>
                    </div>
                      <div id="monTriangle"></div>
                    </div>';
                $id++;
              }
              else
              {
                       // Si jamais le message a insere contient un lien vers un autre message
                         // link_messageDans link_message sera afficher le liens vers un autre message
                      echo '<div class="monMessages monMessagess" title="Cliquez pour répondre à ce message">
                                <div class="monmessage-content">
                                <div class="inverse">
                               <div class="contenu-inverse">
                                '.$donnees['message_link'].'
                                <script type="text/javascript"> echapper();</script>
                              
                                <div class="monMessageLien">
                                     <div class="le-messages" onclick="linkage('.$id.');" id="'.$id.'" pseudosession="'.strtolower($_SESSION['pseudo']).'" pseudo="'.strtolower($donnees['le_pseudo']).'" maestros="1" couleur="rgb(1,110,100)" message="'.htmlspecialchars($donnees['le_message']).'">
                                       '.color_pseudo(htmlspecialchars($donnees['le_message'])). '
                                    </div>
                                 </div>
                                </div>
                                <div class="contenuParraportInversion"></div>
                                       </div>    

                                           <div class="ladates"> 
                                   <i class="dates">'.htmlspecialchars($donnees['date_time']).'
                                       </i>
                                        </div>
                                     </div>
                                        <div id="monTriangle"></div>
                               </div>';
                                 $id++;
            }
      } // Fin de la structure pour la gestion de repeter
      else{
        //##########################Debut de son else

           
          
        if ($donnees['message_link'] == '') 
        {
         
              echo '<div class="monMessages monMessagess" title="Cliquez pour répondre à ce message">
                    <div class="monMessage message" style="margin-right: 3.2%;border-top-right-radius: 10px;">
                      <div class="le-messages" onclick="linkage('.$id.');" id="'.$id.'" couleur="rgb(1,110,100)" pseudosession="'.strtolower($_SESSION['pseudo']).'" pseudo="'.strtolower($donnees['le_pseudo']).'" maestros="1" message="'.htmlspecialchars($donnees['le_message']).'">
                           '.color_pseudo(htmlspecialchars($donnees['le_message'])). '
                      </div>
                     <div class="ladates"> 
                         <i class="dates">'.htmlspecialchars($donnees['date_time']).'
                         </i>
                     </div>
                  </div>
                  <div></div>
              </div>';
             $id++;
        }else{
          // Ci jamais le message a insere contient un lien vers un autre message
          // link_messageDans link_message sera afficher le liens vers un autre message
          echo '<div class="monMessages monMessagess" title="Cliquez pour répondre à ce message">
                    <div class="monmessage-content" style="margin-right: 3.2%;border-top-right-radius: 10px;">
                  <div class="inverse">
                    <div class="contenu-inverse">
                       '.$donnees['message_link'].'
                      <script type="text/javascript"> echapper();</script>
                       <div class="monMessageLien">
                            <div class="le-messages" onclick="linkage('.$id.');" id="'.$id.'" couleur="rgb(1,110,100)" pseudosession="'.strtolower($_SESSION['pseudo']).'" pseudo="'.strtolower($donnees['le_pseudo']).'" maestros="1" message="'.htmlspecialchars($donnees['le_message']).'">
                              '.color_pseudo(htmlspecialchars($donnees['le_message'])). '
                           </div>
                       </div>
                      </div>
                      <div class="contenuParraportInversion"></div>
                  </div>    

                        <div class="ladates"> 
                            <i class="dates">'.htmlspecialchars($donnees['date_time']).'
                            </i>
                      </div>
                  </div>
                  <div></div>
              </div>';
             $id++;
        }
      }
      }
      /*********************************************************************************************
      *********************************************************************************************
      ***************si le message n'est pas celui de l'utilisateur courant************************
      *********************************************************************************************
      *********************************************************************************************/
      else{
          if ($donnees['filiature'] == 1) 
          {
            //On verifie si le message a afficher contient un lien ou pas
            //Si jamais on a un message unique
            if ($donnees['message_link'] == '') 
               {
echo '<div class="monMessages" title="Cliquez pour répondre à ce message">
                 <div id="monTriangles"></div>
                 <div class="sonMessage message">
                    <b class="pseudo" id="lepseudo" style="color: '.$donnees['color'].'">
                       ' . htmlspecialchars($donnees['le_pseudo']) . '
                    </b>
                    <br>
                    <div class="le-messages" onclick="linkage('.$id.');" id="'.$id.'" pseudosession="'.strtolower($_SESSION['pseudo']).'" pseudo="'.strtolower($donnees['le_pseudo']).'" couleur="'.$donnees['color'].'" maestros="0" message="'.htmlspecialchars($donnees['le_message']).'" >
                       '.htmlspecialchars($donnees['le_message']) . ' 
                    </div> 
                    <div class="ladate"> 
                       <i class="date">'.htmlspecialchars($donnees['date_time']).'
                       </i>
                  </div>
                </div>
              </div>';
        $id++;
               }else{
                 echo '<div class="monMessages" title="Cliquez pour répondre à ce message">
                        <div id="monTriangles"></div>
                     <div class="sonmessage-content">
                          <div class="contenu-inverse">
                            '.$donnees['message_link'].'
                            <script type="text/javascript"> echapper();</script>
                            <div class="sonMessage message">
                               <b class="pseudo" id="lepseudo" style="color: '.$donnees['color'].'">
                                ' . htmlspecialchars($donnees['le_pseudo']) . '
                               </b>
                                          <br>
                               <div class="le-messages" onclick="linkage('.$id.');" id="'.$id.'" pseudosession="'.strtolower($_SESSION['pseudo']).'" pseudo="'.strtolower($donnees['le_pseudo']).'" couleur="'.$donnees['color'].'" maestros="0" message="'.htmlspecialchars($donnees['le_message']).'" >
                                      '.htmlspecialchars($donnees['le_message']) . ' 
                               </div> 
                            <div class="ladate"> 
                                  <i class="date">'.htmlspecialchars($donnees['date_time']).'
                                 </i>
                           </div>
                         </div>
                         </div>
                   </div>
              </div>';
        $id++;
              
   
            
        }
          }else{
            //Dans le cas ou le message a afficher suis un autre
            //Si jamais on a un message unique
            if ($donnees['message_link'] == '') 
            {
                     echo '<div class="monMessages" title="Cliquez pour répondre à ce message">
                 <div></div>
                 <div class="sonMessage message" style="margin-left: 3.2%;border-top-left-radius: 10px;">
                    
                    <b class="pseudo" id="lepseudo" style="color: '.$donnees['color'].'">
                       ' . htmlspecialchars($donnees['le_pseudo']) . '
                    </b>
                    <br>
                  <div class="le-messages" onclick="linkage('.$id.');" id="'.$id.'" pseudosession="'.strtolower($_SESSION['pseudo']).'" pseudo="'.strtolower($donnees['le_pseudo']).'"       couleur="'.$donnees['color'].'" maestros="0" message="'.htmlspecialchars($donnees['le_message']).'" >
                       '.htmlspecialchars($donnees['le_message']) . ' 
                    </div> 
                    <div class="ladate"> 
                       <i class="date">'.htmlspecialchars($donnees['date_time']).'
                       </i>
                  </div>
                </div>
              </div>';
               $id++;
          }else{
            echo '<div class="sonMessages" title="Cliquez pour répondre à ce message">
                    <div class="sonmessage-content" style="margin-left: 3.2%;border-top-left-radius: 10px;">
                  <div class="inverse">
                    <div class="contenu-inverse">
                      '.$donnees['message_link'].'
                      <script type="text/javascript"> echapper();</script>
                       <div class="monMessageLien">
                          <b class="pseudo" id="lepseudo" style="color: '.$donnees['color'].'">
                                ' . htmlspecialchars($donnees['le_pseudo']) . '
                               </b>
                            <div class="le-messages" onclick="linkage('.$id.');" id="'.$id.'" pseudosession="'.strtolower($_SESSION['pseudo']).'" pseudo="'.strtolower($donnees['le_pseudo']).'" couleur="'.$donnees['color'].'" maestros="0" message="'.htmlspecialchars($donnees['le_message']).'">
                              '.color_pseudo(htmlspecialchars($donnees['le_message'])). '
                           </div>
                       </div>
                      </div>
                      <div class="contenuParraportInversion"></div>
                  </div>    

                        <div class="ladates"> 
                            <i class="dates">'.htmlspecialchars($donnees['date_time']).'
                            </i>
                      </div>
                  </div>
                  <div></div>
              </div>';
             $id++;
            
          }
          }
        
      }
  }//Fin de la boucle while
  $reponse->closeCursor();
  /*Cette fonction se charge de cherche la presence du caractere @ dans le message si jamais il est present et que le mot qui le suit est un pseudo valide, alors ce pseudo dois etre colore en bleu*/

  function color_pseudo($word){
    $arrayName = array('0' => 0, '1' => 0, '2' => 0, '3' => 0, '4' => 0, '5' => 0, '6' => 0, '7' => 0, '8' => 0, '9' => 0, '10' => 0, '11' => 0, '12' => 0, '13' => 0);
    $push = 0; //Cette varible indique la position a laquelle on insere les position du caractere @
    $nb_find = 0; //Nombre de caractere @ trouves 
    //Cette boucle se charge recupere toute les positions du caractere @ DANS LE MESSAGE
      for ($i=0; $i < strlen($word) ; $i++) { 
        if ($word[$i] == '@') {
          $nb_find++;
          $arrayName ["$push"] = $i;
        }
      }
      //Cette boucle remplace tous les mots precedes par @ par son equivalent en couleur
      $ii = 0;
      $str = '';
      while ($nb_find > 0 ) {
        for ($i= $arrayName["$ii"]; $i < strlen($word)  ; $i++) { 

          if ($word[$i] == ' ') 
          {
            break;
          }

          $str .= $word[$i];
         $word = str_replace($str, '<a href="">'.$str.'</a>', $word);
        }
         $ii++;
        $nb_find--;
      }

  return $word;
  }
  
    ?>
   
  
   </div>
   
   <div class="message_send" id="message_send">
    <form class="formulaire_chat" action="fonctions/chat_post.php" method="post">
      <div class="message_send_invese" id="message_send_invese">
              <div class="message-link" id="message-link"></div>
              <textarea name="message" id="message" placeholder="Tapez votre message..."></textarea> 
      </div>
         <input type="hidden" name="message_link" id="message_link" value="">
         <input type="submit" value="" class="send" style="background-image: url(Ressources/message.png);background-repeat: no-repeat;" id="submit" onclick="return sendMessage('message')">
    </form>
  </div>

 </div>
  </section>
  <!-- CETTE SECTION CONCERNE LE MENU  DROIT DU SITE -->

         <?php include('includes/cote-droit-commun.php');  ?>
</div>
 <?php include('includes/footer.php'); ?>
<!--  <script type="text/javascript">
   window.onresize = function(e)
   {
    let largeur = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
      
      // if (largeur > 500) 
      // {
      // document.getElementById('message').style.borderRadius = '40px';

      // }
   };
 </script> -->
    </body>



</html>