function suivre(id)
{
 var suivre, cours,xhr,chemin;
 suivre = document.getElementById(id);
chemin = suivre.getAttribute('link');
   
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
     
	   xhr.open("get", chemin, true);
	   xhr.onreadystatechange = function()
	    {

	  		if(xhr.readyState == 4 && xhr.status == 200)
	   		{
	   			alert('Donnees insere');
       		}else{
       			element.innerHTML = 'Page not found';
       		}
 	    }
		 xhr.send(null);
	
   
	 return false;
}