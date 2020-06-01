
<!-- Le menu -->
        <!--Principaux liens de Navigations-->
        <nav>
            <div class="LignePresentation">
              <ul>
                <li class="menu-Conexion"><a>BIENVENUE</a></li>
                <?php
                  echo'<li class=\"menu-Conexion\"><a class="user_conected_style">'.$_SESSION['pseudo'].'</a></li>'; ?>

                  <li class="menu-Conexion"><a href="Mon_compte.php">Mon compte</a></li>
                  <li class="menu-Incription"><a href="Mes_cours.php">Mes cours</a></li>
                  <li class="menu-password"><a onclick="destruction_des_session();">D&eacute;connexion</a></li>
                  <!--<li class="menu-Forum"><a href="Forum.html">Forum</a></li>-->
                 <!-- <li class="menu-contacter"><a href="Nous-contacter.html">Nous contacter</a></li>-->
                 
              </ul>
            </div>
        
        </nav>