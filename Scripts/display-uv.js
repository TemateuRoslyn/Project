function display(id,id1)
{
    div_mask(parseInt(id));	
	var xhr, element, elemnt_attribut;
	element = document.getElementById(id);
	
	elemnt_attribut = element.getAttribute('page-a-inclure');
    element.style.display = 'block';


    
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
     
	   xhr.open("get", elemnt_attribut, true);
	   xhr.onreadystatechange = function()
	    {

	  		if(xhr.readyState == 4 && xhr.status == 200)
	   		{
	   			element.innerHTML = xhr.responseText;
       		}else{
       			element.innerHTML = 'Page not found';
       		}
 	    }
		 xhr.send(null);
	
   
	 return false;
}

// Cette fonction se charge de chacher toute les div font on a pas besoin;

function div_mask(id)
{

	if(id == 1)
	{
		for (var i = 2; i <= 8; i++) {
			document.getElementById(''+i).style.display = 'none';
			 var val = i+10;
			// document.getElementById(val).style.opacity = 1;
		}
	}else if(id == 8)
	{
		for (var i = 1; i < 8; i++) {
			document.getElementById(''+i).style.display = 'none';
			// var val = i+10;
			// document.getElementById(''+val).style.opacity = 0.5;
		}
	}else if(id < 8 && id >= 1)
	{
		for (var i = 1; i < id; i++) {
			document.getElementById(''+i).style.display = 'none';
			// var val = i+10;
			// document.getElementById(''+val).style.opacity = 0.5;
		}
		for (var i = id+1; i <= 8; i++) {
			document.getElementById(''+i).style.display = 'none';
			// var val = i+10;
			// document.getElementById(''+val).style.opacity = 0.5;
		}
	}
}

function nextLevel(lev1,lev2,lev3,niv1,niv2,niv3)
{
 document.getElementById(lev1).style.opacity = 1;
 document.getElementById(lev2).style.opacity = 0.5;
 document.getElementById(lev3).style.opacity = 0.5;

 document.getElementById(niv1).style.display = 'block';
 document.getElementById(niv2).style.display = 'none';
 document.getElementById(niv3).style.display = 'none';

}