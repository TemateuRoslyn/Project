
$(function()
  {
    $('#idFormulaire').submit(function()
    {
      //Recuperation de toutes  les valeur du formulaire 
      // $('#loader').show();  //On affiche l'image de chargement load.gif
      pseudonyme = $(this).find('input[name=pseudonyme]').val();
      pass = $(this).find('input[name=pass]').val();

      $.post('fonctions/conexion.php', {pseudonyme: pseudonyme, pass: pass}, function(data)
       {
         //Et lorsque les données ont été postées peut importe qu'il y a eu ajout ou 
          //pas dans la base de données on cache de nouveau l'image
          //C'est à dire que la partie Ajax a fini de s'exécutée
          //$('#loader').hide();
          if(data.trim() === 'yes'){
            window.location = 'Projet-web.php';
          }else if(data.trim() === 'not'){
            afficher();
          }
       });
            return false; //Empecher la soumission du formulaire c'est à dire interdire 
            //au formulaire d'envoyer les données comme il a l'habitude de le faire

    });
  });

 function afficher(){

        var modal = document.getElementById('mymodal');
        modal.style.display = 'block';
      }
      function cacher(){
        var span = document.getElementById('mymodal');
        span.style.display = 'none';
      }
    