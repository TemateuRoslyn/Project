<?php
session_start(); 
include('../includes/connexion.php');

if (isset($_GET['id'])) 
{
  $req_delete = $bd->prepare('DELETE FROM commentaires WHERE id = :lid');
  $req_delete->execute(array('lid' => $_GET['id']));
}

           
            //Mise a jour  des commentaire
         

           $req_com = $bd->prepare('SELECT * FROM commentaires ORDER BY :ordre  LIMIT :debut, :nbr_entrees');

           $req_com ->bindValue(':ordre', 'id DESC', PDO::PARAM_STR);
           $req_com ->bindValue(':debut', 0, PDO::PARAM_INT);
           $req_com ->bindValue(':nbr_entrees', 10, PDO::PARAM_INT);

           $req_com->execute();


          
      while($ligne = $req_com->fetch()){
        if (strtolower($_SESSION['pseudo']) == strtolower($ligne['pseudo'])) {
        echo'  <div class="post_INVERSE">
              <div class="mon_iccone">'.getFirstCharToUpper($ligne['pseudo']).'</div>
                  <div class="commentaire_post commentaire_post-'.$ligne['id'].'" message="'.$ligne['message'].'">
                         <p>'.$ligne['pseudo'].'&#8226;<i>'.changedate($ligne['date_publication']).'</i>
                         </p>
                  <b class="comm_message" id="com-'.$ligne['id'].'">'.$ligne['message'].'</b>
                  <div class="com_option_bottom">
                      <span class="delete_com" onclick="delete_commentaire('.$ligne['id'].');">Supprimer</span>
                      <span class="modify_com modify_com-'.$ligne['id'].'" bool="false" onclick="modify_commentaire('.$ligne['id'].');">Modifier</span>
                  </div>    
              </div>

            </div>  '
          ;
          }else{
            echo'  <div class="post_INVERSE">
              <div class="mon_iccone">'.getFirstCharToUpper($ligne['pseudo']).'</div>
                  <div class="commentaire_post" message="'.$ligne['message'].'">
                         <p>'.$ligne['pseudo'].'&#8226;<i>'.changedate($ligne['date_publication']).'</i>
                         </p>
                  <b class="comm_message" id="'.$ligne['id'].'">'.$ligne['message'].'</b>
              </div>

            </div>  '
          ;

          }
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