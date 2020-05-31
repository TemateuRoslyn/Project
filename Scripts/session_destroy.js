function destruction_des_session()
{
	var xhr;

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
	   	alert('Votre Na vigateur ne pas effecutuer des requetes sur le serveur');
	   }
	 }

     
	   xhr.open("get", 'fonctions/destroy_session.php', true);
	   xhr.onreadystatechange = function()
	    {

	  		if(xhr.readyState == 4 && xhr.status == 200)
	   		{
	   				
	   			window.location = 'Projet-web.html';
	   					
       		}else if (xhr.status == 404){
       			alert('Page not found');
       		}
 	    }
		 xhr.send(null);
	
   
	 return false;
}
	