 <header> 
            <div class="ensemble">
            	<b class="genius_title"> Genius Classromm: L' &eacute;ducation pour tous !! </b>
            	
            	<div class="div_description">
            		<button onclick="showdescription();" id="description_btn" ondblclick="hidedescription();">Voire la description</button>

            		<b class="description_site" id="description_site">
            			Genius Classromm est un site web de e-learning mis sur pied par l' &eacute;quipe genius dans le but de mettre &agrave; la disposition des &eacute;tudiants de la facult&eacute; des sciences de l'universit&eacute; de Dschang les cours au format pdf, de fournir &agrave; chaque &eacute;tudiant un espace de travail simplifi&eacute; o&ugrave; il pourra s'&eacute;panouir dans ses &eacute;tudes. 
            		</b>
            		            	</div>
            </div>
            <!--<div class="Aincrad">
            <img src="aincrad1.jpg">
        </div>-->
            
        </header>
        <script type="text/javascript">
        	function showdescription()
        	{
        		document.getElementById('description_site').style.display = 'block';
        		var btn = document.getElementById('description_btn');
        		btn.innerHTML = 'Double click pour<br> cacher la description';
        		btn.style.marginTop = 'initial';
        	}
        	function hidedescription()
        	{
        		document.getElementById('description_site').style.display = 'none';
        		document.getElementsByClassName('ensemble')[0].style.marginBottom = '10px';
        		var btn = document.getElementById('description_btn');
        		btn.innerHTML = 'Voire la description';
        		btn.style.marginTop = '10px';
        	}
        </script>