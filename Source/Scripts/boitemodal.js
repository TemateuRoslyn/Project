 <script type="text/javascript">
      // var afficher = function(){
      //   var span = document.getElementById('mymodal');
      //   span.style.display = 'none';
      //   aler('cool');
      // }
      function afficher(e){

        var modal = document.getElementById('mymodal');
        modal.style.display = 'block';
      }
      function cacher(){
        var span = document.getElementById('mymodal');
        span.style.display = 'none';
      }
    
    // window.addEventListener == 'undefined' ? document.attachEvent("click",afficher) : addEventListener("click", , false);

    // window.addEventListener = 
    // onclick =function(event)
    // {
    //   if (event.target == modal) {
    //     modal.style.display = 'none';
    //   }
    // }
  </script>
  <style type="text/css">
    #mybtn{
      font-size: 30px;
      color: yellow;
    }
    #mybtn:hover{
      cursor: pointer;
    }
    .modal{
      display: none;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      border: 1px solid #888;
      position: relative;
      z-index: 1;
/*      left: 0;
      top: 0;*/
      width: 80%;
      box-shadow:  0px 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
      animation-name: animetop;
      animation-duration: 0.4s;
      height: 100%;
      overflow: auto;
      background-color: rgb(0,0,0);
      background-color: rgba(0,0,0,0.4);

    }
    @keyframes animetop{
      from{
        top: -300px;
        opacity: 0
      }
      to{
        top: 0;opacity: 1
      }
    }
    .modal-content{
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;

    }
    .close{
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;

    }
    .close:hover, .close:focus{
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
    .modal-header{
      padding: 2px 16px;
      background-color: #5cb85c;
      color: white;
    }
    .modal-body{
      padding: 2px 16px;
    }
    .modal-footer{
      padding: 2px 16px;
      background-color: #5cb85c;
      color: white;
    }
  </style>




  <button id="mybtn" onclick="afficher();">voir la modal</button>
   <div id="mymodal" class="modal">
     <!-- Contenu de la modal -->
        <div class="modal-content">
               <div class="modal-header">
                   <span class="close" id="croix" onclick="cacher();">&times;</span>
                   <h1>Genius Classroom Modal</h1>
              </div>
              
              <div class="modal-body">
                   <p>Cette bote de dialogue est generee depuis genius classroom et vous affiche une notificcation</p>
             </div>

             <div class="modal-footer">
                <p>Le footer de la Modal</p>
             </div>
       </div>
   </div>