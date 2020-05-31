function sendMessage(id)
{
	var xhr, element, message, bool,message_link, link;

	element = document.getElementById(id);
	message_link = document.getElementById('message_link');
	
	link = message_link.value;
	message_link.value = '';
	message = element.value;
	element.value = '';
	element.placeholder = 'Tapez votre message...';
	element.style.borderColor = 'white';

	bool = false;
    for (var c in message) 
    {
       if (message[c] != ' ') {
       	bool = true;
       }
	}
	if(bool == false){
		return bool;
	}
	document.getElementById('message-link').style.display = 'none';
	document.getElementById('message_send').style.height = '20%';
	document.getElementById('message_send').value = '';
	document.getElementById('chatts').style.height = '70%';

	 if(window.XMLHttpRequest)
	 {
        xhr = new XMLHttpRequest();
     }else
     {

   	   if(window.ActiveXObject)
   	   {
	     xhr = new ActiveXObject("Microsoft.XMLHTTP");
	   }else
	   {
	   }
	 }
     
	   xhr.open("get", 'fonctions/chat_post.php?message='+message+'&'+'message_link='+link, true);
	   xhr.onreadystatechange = function()
	    {

	  		if(xhr.readyState == 4 && xhr.status == 200)
	   		{
	   			document.getElementById('chatts').innerHTML = xhr.responseText;
       		}else{
       			element.innerHTML = 'Page not found';
       		}
 	    }
		 xhr.send(null);
	
   
	 return false;
}

	
function supprimer(){
	document.getElementById('message-link').style.display = 'none';
	document.getElementById('message').style.borderRadius = '10px';
	// 
	document.getElementById('message_send').style.height = 'initial';
	var h; 
	h = document.getElementById('message_link');
	h.value = '';
}



function linkage(id)
{

	var element, message, sible, lien, link, lemessage, pseudo, couleur, maestros,sms,pseudosession,inverse;

  	let largeur = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  	  if (largeur <= 500) 
  	  {
  	 lemessage =  document.getElementById('message');
  	 lemessage.style.borderTopRightRadius = '0px';
	lemessage.style.borderTopLeftRadius = '0px';
	lemessage.style.borderBottomRightRadius = '10px';
	lemessage.style.borderBottomLeftRadius = '10px';
  	  }
  	
	// // 		border-top-right-radius: 0px;
	// 	border-top-left-radius: 0px;
	// 	border-bottom-left-radius: 20px;
	// 	border-bottom-right-radius: 20px;

	link = document.getElementById('message-link');

	link.style.display = 'block';

	sible = document.getElementById('message-link');
	inverse = document.getElementById('message_send_invese');
	inverse.style.backgroundColor = 'white';
	inverse.style.borderRadius = '10px';

	element = document.getElementById(id);
	pseudo = element.getAttribute('pseudo');
	couleur = element.getAttribute('couleur');
	message = element.getAttribute('message');
	maestros = element.getAttribute('maestros');
	pseudosession = element.getAttribute('pseudosession');

	lien = document.getElementById('message_link');//au niveau du formulaire
	lien.style.marginLeft = '3%';

// Test s'il s'agite d'un lien vers l'utilisateur courant ou un autre participant
/*.link_message{
	margin-top: 0.9%;
	height: 50px;
	width: 100%;
	width: auto;
	max-width: inherit;
	border-left: 3px solid red;
	background-color: #aaf;
	opacity: 0.9;
	margin-bottom: 0.7%;
	text-align: left;
	border-radius: 5px; 
	font-size: 20px;
	overflow-y: hidden;
}*/
   sible.style.width = 'inherit';
   sible.style.borderBottomRight = '10px';
   sible.style.borderBottomLeft = '10px';
  if (maestros == 1) {
  	if (pseudosession == pseudo) {
  	sms = '<b style="color: rgb(1,110,100);">vous</b><br>'+message;
  	  sible.style.borderLeft = '3px solid rgb(1,110,100)';
  	  sible.style.marginLeft = '1.5%';
  	  sible.style.marginRight = '1.5%';
  	  sible.style.marginTop = '1.5%';
  	}
	}else{
	sms = '<b style="color: '+couleur+';">'+pseudo+'</b><br>'+message;
	sible.style.borderLeft = '3px solid '+couleur;
  	  sible.style.marginLeft = '1.5%';
  	  sible.style.marginRight = '1.5%';
  	  sible.style.marginTop = '1.5%';


	}

	sible.innerHTML = '<span onclick="supprimer();">&times;</span>'+sms;

	document.getElementById('chatts').style.height = '70%';
	document.getElementById('message_send').style.height = '20%';

	// lien.value = '<div class="link_message" id="link_message" style="border-left: 5px solid '+couleur+'">'+'<b style="color: '+couleur+';" id="pseudobd" pseudobd="'+pseudo+'">'+pseudo+'</b><br><a href=#"'+id+'">'+message+'<a/></div>';	
	lien.value = '<div class="link_message" id="link_message" style="border-left: 5px solid '+couleur+'">'+'<b style="color: '+couleur+';" id="pseudobd" pseudobd="'+pseudo+'">'+pseudo+'</b><br><a href="'+id+'">'+message+'</a></div>';	




document.getElementById('message').style.borderRadius = '10px';
}



function hidden_link(id)
{
	document.getElementById(id).style.display = 'none';
}
function echapper()
{

}




