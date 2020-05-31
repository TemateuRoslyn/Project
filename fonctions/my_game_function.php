<?php 
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
 // Redirection du visiteur vers la page du minichat 


 function color_increment($color)
 {
  $new_str = substr($color, 4);
  $new_str = substr($new_str, 0, -1);

  $new_str1 =   $new_str;
  $new_str2 =   $new_str;
  $post1 = -1;
  $post2 = -1;
  //Recuperation des positions des virgules
  for ($i=0; $i < strlen($new_str) ; $i++) { 
    if ($new_str[$i] == ',' AND $post1 == -1) {
      $post1 = $i;
    }
    if ($new_str[$i] == ',' AND $post1 != -1) {
      $post2 = $i;
    }
  }
  $post = ($post2-$post1) -1;
  $ii = $post1+1; 
  $postt = $post2+1; 
  $nombre1 = substr($new_str, 0, $post1);
  $nombre2 = substr($new_str1, $ii, $post);
  $nombre3 = substr($new_str2, $postt);
  //Incrementation des nombres
if ($nombre3 < 999) {
    $nombre3 +=500;
    if ($nombre3 > 999) {
      $nombre3 -=500;
      $nombre2++;
    }
  }


  if ($nombre2 < 999) {
    $nombre2+=100;
    if ($nombre2 > 999) {
      $nombre2-=100;
      $nombre1++;
    }
  }
  return 'rgb('.$nombre1.','.$nombre2.','.$nombre3.')';
 }

 function verify_post($data, $nb)
{

  if ($nb == 0) {
   
    return '-1';
  }
  $numero = $nb-1;
  $datas = $data->fetchAll();
  $tableau = $datas[$numero];
  return $tableau['le_pseudo'];
}



?>