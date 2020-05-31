<?php session_start(); ?>

<?php // Connexion à la base de données 
try { $bdd = new PDO('mysql:host=localhost;dbname=genius_classroom', 'root', ''); 
} catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
} // Insertion du message à l'aide d'une requête préparée


          $annee = date('Y');
           $mois = date('m');
          $jour = date('d');
          $heure = date('H');
           $minutes = date('i');
          $seconde = date('s');
          $date_complete = $annee.'-'.$mois.'-'.$jour.' '.$heure.':'.$minutes.':'.$seconde; 

          $req = $bdd->prepare('INSERT INTO commentaires (pseudo, message, date_publication) VALUES(?, ?, ?)');
           $req->execute(array($_GET['pseudo'], $_GET['commentaire'], $date_complete));
           
         
           
            //Mise a jour  des commentaire
         

           $req_com = $bdd->prepare('SELECT * FROM commentaires ORDER BY :ordre  LIMIT :debut, :nbr_entrees');

           $req_com ->bindValue(':ordre', 'id DESC', PDO::PARAM_STR);
           $req_com ->bindValue(':debut', 0, PDO::PARAM_INT);
           $req_com ->bindValue(':nbr_entrees', 10, PDO::PARAM_INT);

           $req_com->execute();


           while ($ligne = $req_com->fetch()) {
           echo'  <div class="post_INVERSE">
              <div class="mon_iccone">'.getFirstCharToUpper($ligne['pseudo']).'</div>
                  <div class="commentaire_post"><p>'.$ligne['pseudo'].'&#8226;<i>'.changedate($ligne['date_publication']).'</i></p>
                  '.$ligne['message'].'
              </div>
            </div>  '
          ;
      }
      function getFirstCharToUpper($string)
      {
        $str = substr($string, 0, 1);
        return strtoupper($str);
      }
      function changedate($date)
      {
        $str = str_replace(" ", ' &agrave ', $date);
        return 'le '.$str;
      }
      $req_com->closeCursor();

          ?>