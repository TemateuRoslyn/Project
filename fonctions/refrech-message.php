<?php 
  // Connexion à la base de données 
    try { 
    $bdd = new PDO('mysql:host=localhost;dbname=genius_classroom', 'root', ''); 
    } catch(Exception $e) {        
    die('Erreur : '.$e->getMessage()); 
    } 
    // Récupération des 10 derniers messages 
    $reponse = $bdd->query('SELECT * FROM chat'); 
     $id = 0;
     while ($donnees = $reponse->fetch()) { 
      if (strtolower($donnees['le_pseudo']) == strtolower($_SESSION['pseudo'])) {
        echo '<div class="monMessage message" onclick="color('.$id.');" id="'.$id.'">'.color_pseudo(htmlspecialchars($donnees['le_message'])). '<div class="ladates"> <i class="dates">'.htmlspecialchars($donnees['date_time']).'</i></div></div>';
        $id++;
      }else{
        echo '<div class="sonMessage message" onclick="color('.$id.');" id="'.$id.'"><b class="pseudo" style="color: '.$donnees['color'].'">' . htmlspecialchars($donnees['le_pseudo']) . '</b><br>'.htmlspecialchars($donnees['le_message']) . ' <div class="ladate"> <i class="date">'.htmlspecialchars($donnees['date_time']).'</i></div></div>';
        $id++;
      }
    }
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

          if ($word[$i] == ' ') {
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