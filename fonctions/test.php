<?php 

$nom  = 'M  a   es \  t ros\ ,<b>  ros l  y  n \  !!!</b>';
function pseudo_transforme($pseudo)
        {
           $str_replace = str_replace(" ", "", $pseudo);//supprimer les espace
           $ripslash = stripslashes($str_replace);//supprimer les enti-slash
           $rip_html_balise = strip_tags($ripslash); // Supprimer lesbalise html
  
          $pseudo_lower = strtolower($rip_html_balise);
           return $pseudo_lower;
        }  

echo pseudo_transforme($nom);
?>