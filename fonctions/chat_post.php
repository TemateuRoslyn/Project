<?php session_start(); ?>
<?php include('my_game_function.php'); ?>
<?php // Connexion à la base de données 
try { $bdd = new PDO('mysql:host=localhost;dbname=genius_classroom', 'root', ''); 
} catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
         } 

 // Insertion du message à l'aide d'une requête préparée
 $annee = date('Y');
 $mois = date('m');
 $jour = date('d');
 $heure = date('H');
 $minutes = date('i');
 $seconde = date('s');
 $date_complete = $annee.'-'.$mois.'-'.$jour.' '.$heure.':'.$minutes.':'.$seconde; 
 



 //Recuperation du nombre de ligne de la table chat
 $req_row = $bdd->query('SELECT COUNT(*) AS nb FROM chat');
 $row =  $req_row->fetch();
 $nb =  $row['nb'];

 $last_color = NULL;

 $color_insert = '';
/***********************************************************************************
*********Dans le cas d'une premiere utilisation et que la table chat est vide*******
*************************************************************************************/
if ($nb == 0) {
  $color_insert = 'rgb(1,1,1)';
}else{
   // Re cuperation de la couleur de l'utisateur courant
 $req_color = $bdd->prepare('SELECT color FROM chat WHERE le_pseudo = :pseudo');
 $req_color ->execute(array('pseudo' => $_SESSION['pseudo']));
  $color_utilisateur = $req_color->fetch();
  if (strlen($color_utilisateur['color']) >2) {
    $color_insert = $color_utilisateur['color'];
  }else{
  //dans le cas l'utilisateur participe au chat pour sa premiere fois
  //et on recupere la derniere couleur pour l'incrementer
 $req_color = $bdd->query('SELECT * FROM chat');

  while ($ligne = $req_color->fetch() ) {
    $last_color = $ligne['color'];
  }

  $color_insert = color_increment($last_color);

  }
   
 }
 //on termine la requete
 $req_row->closeCursor();
 $query_der = $bdd->query('SELECT * FROM chat');
 $pseudo_last_message = verify_post($query_der,$nb);
$filer = NULL;
 
 $req = $bdd->prepare('INSERT INTO chat (le_pseudo, le_message, message_link, date_time, color, filiature) VALUES(?, ?, ?, ?, ?, ?)');

if (strtolower($pseudo_last_message) == strtolower($_SESSION['pseudo'])) {
   $filer = 0;
}else{
   $filer = 1;
}

  $req->execute(array($_SESSION['pseudo'], $_GET['message'],$_GET['message_link'], $date_complete, $color_insert, $filer));


 $req->closeCursor();



 // header('Location: chat.php'); 
          ?>
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


  
    ?>