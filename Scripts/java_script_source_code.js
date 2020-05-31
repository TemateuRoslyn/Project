function verifyinscription()
{
    var pseudo, pass, passconfirm, email, description, xhr, formulaire, bool = false,profil;

    formulaire = document.getElementById('idFormulaireInscription');

    pseudo = document.getElementById('pseudo').value;
    pass = document.getElementById('pass').value;
    email = document.getElementById('email').value;
    passconfirm = document.getElementById('passconfirme').value;
    description = document.getElementById('description').value;
    profil = document.getElementById('profil').value;
     
     if (pass != passconfirm) 
     {
        pasinscrit();
        return false;
     }
    //  if(window.XMLHttpRequest){
    //     xhr = new XMLHttpRequest();
    //     bool = true;

    //  }else if (window.ActiveXObject) {
    //    xhr = new ActiveXObject("Microsoft.XMLHTTP");
    //    bool = true;
    //  }else{
    //     document.getElementById('message_modal').innerHTML = "Ce navigateur ne peut pas effectu&eacute; des requ&ecirc;s sur le serveur";
    //      pasinscrit();
    //  }
    //  if (bool == true) 
    //  {
    //     xhr.open("get", 'fonctions/formulaire-inscription.php?pseudo='+pseudo+'&pass='+pass+'&email='+email+'&description='+description, true);
    //     xhr.onreadystatechange = function(){
    //         if (xhr.readyState == 4 && xhr.status == 200) {
    //             window.location = 'Projet-web.php';
    //         }
    //         if(xhr.status == 404)
    //         {
    //            document.getElementById('message_modal').innerHTML = "La page cible de ce formulaire est introuvable !!";
    //            pasinscrit();
    //         }
    //     }
    //     xhr.send(null);
    //  }
     

    
    // return false;

}
function autorise_download()
{
     document.getElementById('message_modal').innerHTML = "Pour pouvoir t&eacute;l&eacute;charger des cours sur ce site veuillez vous connectez &agrave; votre compte genius, si vous n'en disposez pas veuillez-vous inscrire !!";
     pasinscrit();
}

function autorise_chat()
{
     document.getElementById('message_modal').innerHTML = "Pour pouvoir participer au chat et inter-agir avec les autres utilisateurs sur ce site veuillez vous connectez &agrave; votre compte genius, si vous n'en disposez pas veuillez-vous inscrire !!";
      pasinscrit();
}




         //Message à afficher lorsqu'on clique sur chat sans etre membre

         function pasinscrit(){
            afficher();
         }

         function color(id)
         {
            alert('click'+id);
         }
           function afficher(){

        var modal = document.getElementById('mymodal');
        modal.style.display = 'block';
        modal.setAttribute('click', '1');
      }
      function cacher(){
        var span = document.getElementById('mymodal');
        span.style.display = 'none';
      }
         
 function modifier_photo_profil()
 {
    document.getElementById('modify_btn').style.display = 'none';
    document.getElementById('form_profil').style.display = 'block';
 }

  function modifier_photo_profil_applique()
  {
    var val = document.getElementById('value').value;
    if (val.length < 2) 
    {
        document.getElementById('mymodal').style.display = 'block';
        document.getElementById('message_modal').innerHTML = 'Vous devez selectionner une image pour continuer...';
        return false;
    }else{
    document.getElementById('modify_btn').style.display = 'block';
    document.getElementById('form_profil').style.display = 'none';
    }
  }
  function annuler_modify_profil()
  {
    document.getElementById('modify_btn').style.display = 'block';
    document.getElementById('form_profil').style.display = 'none';
  }


             
             
             
             
             
