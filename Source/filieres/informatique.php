<!--*******************************************************************************************
              *********************************************************************************************
                                             DEPARTEMENT D'INFORMATIQUE
              *******************************************************************************************
              *******************************************************************************************--> 
            
            
            <!--**************************************************************
                     COURS DESTIN&Eacute;S AU ETUDIANTS D'INFORMATIQUE NIVEAU I
             ****************************************************************-->
            <div id="AllINF">
              <div class="next-level">
                    <div class="level1" id="level1" onclick="nextLevel('level1','level2','level3','niv1','niv2','niv3')">Niveau I</div>
                    <div class="level2" id="level2" onclick="nextLevel('level2','level1','level3','niv2','niv1','niv3')">Niveau II</div>
                    <div class="level3" id="level3" onclick="nextLevel('level3','level2','level1','niv3','niv2','niv1')">Niveau III</div>
                </div>
            <div id="niv1">
               <div class="matiere-title">Informatique Niveau <br>NIVEAU I:</div>
               
            <table  border="1" class="cours-display">
              <thead>
                  <tr>
                    <th>Link</th>
                    <th>Le code</th>
                    <th>Intitulé UE/Cours UE/Course Title </th>
                </tr>
              </thead>
              <tbody>
                 <tr>
                     <td class="detail" >
                        <ul class="submenu">
                          <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=INTRODUCTION &Agrave; L'ALGORITHMIQUE&lien=faculte_des_sciences/filiere_informatique/la4.pdf" id="algo" onclick="suivre('algo')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                        </ul>
                     </td> 

                     <td>INF 111</td>
                     <td>INTRODUCTION &Agrave; L'ALGORITHMIQUE</td>
                 </tr>
                 <tr>
                      <td class="detail" >
                        <ul class="submenu">
                         <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=ARCHITECTURE DES ORDINATEURS&lien=faculte_des_sciences/filiere_informatique/la4.pdf" id="archi" onclick="suivre('archi')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                        </ul>
                     </td> 
                     <td>INF 121</td>
                     <td>ARCHITECTURE DES ORDINATEURS</td>
                </tr> 
                <tr >
                     <td class="detail" >
                        <ul class="submenu">
                         <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=PROGRAMMATION STRUCTUR&Eacute;E (C OU PYTHON)&lien=faculte_des_sciences/filiere_informatique/la4.pdf" id="c" onclick="suivre('c')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                        </ul>
                    </td> 
                    <td>INF 131</td>
                    <td>PROGRAMMATION STRUCTUR&Eacute;E (C OU PYTHON)</td>
                </tr> 
                <tr>
                    <td  class="detail" >
                        <ul class="submenu">
                          <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=ANALYSE 1&lien=faculte_des_sciences/filiere_informatique/la4.pdf" id="annalye1" onclick="suivre('annalye1')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                        </ul>
                    </td> 
                    <td>INF 141</td>
                    <td>ANALYSE 1</td>
              </tr> 
              <tr>
                    <td class="detail" >
                        <ul class="submenu">
                          <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=ANALYSE 1&lien=faculte_des_sciences/filiere_informatique/la4.pdf"  id="ang1" onclick="suivre('ang1')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                      </ul>
                    </td> 
                     <td>INF 151</td>
                     <td>LANGUE ANGLAISE 1</td>
              </tr> 
              <tr>
                      <td class="detail" >
                        <ul class="submenu">
                         <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=M&Eacute;CANIQUE I&lien=faculte_des_sciences/filiere_informatique/la4.pdf"  id="meca" onclick="suivre('meca')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                      </ul>
                    </td> 
                     <td>INF 161</td>
                     <td>M&Eacute;CANIQUE I</td>
              </tr> 
              <tr>
                     <td class="detail" >
                        <ul class="submenu">
                          <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=INTRODUCTION A LA PROGRAMMATION FONCTIONNELLE&lien=faculte_des_sciences/filiere_informatique/la4.pdf" onclick="suivre('pf')" id="pf">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                       </ul>
                     </td> 
                     <td>INF 111</td>
                     <td>INTRODUCTION A LA PROGRAMMATION FONCTIONNELLE</td>
              </tr> 
                <tr>
                     <td class="detail" >
                        <ul class="submenu">
                         <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=ELECTRONIQUE NUMERIQUE I&lien=faculte_des_sciences/filiere_informatique/la4.pdf" id="electro" onclick="suivre('electro')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                      </ul>
                     </td> 
                     <td>INF 112</td>
                     <td>ELECTRONIQUE NUMERIQUE I</td>
              </tr> 
              <tr>
                     <td class="detail" >
                        <ul class="submenu">
                           <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=INTRODUCTION AUX R&Eacute;SEAUX&lien=faculte_des_sciences/filiere_informatique/la4.pdf" id="reso" onclick="suivre('reso')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                       </ul>
                     </td>  
                     <td>INF 122</td>
                     <td>INTRODUCTION AUX R&Eacute;SEAUX</td>
              </tr> 
              <tr>
                     <td class="detail" >
                        <ul class="submenu">
                          <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=INTRODUCTION AU SYT&Egrave;MES D'EXLOITATION&lien=faculte_des_sciences/filiere_informatique/la4.pdf"  id="se" onclick="suivre('se')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                      </ul>
                    </td> 
                     <td>INF 132</td>
                     <td>INTRODUCTION AU SYT&Egrave;MES D'EXLOITATION</td>
              </tr> 
              <tr>
                     <td class="detail" >
                        <ul class="submenu">
                          <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=ALG&Egrave;BRE I&lien=faculte_des_sciences/filiere_informatique/la4.pdf"  id="agebre1" onclick="suivre('agebre1')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                      </ul>
                    </td> 
                     <td>INF 142</td>
                     <td>ALG&Egrave;BRE I</td>
              </tr> 
                 <tr>
                      <td class="detail" >
                        <ul class="submenu">
                           <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=PROGRAMMATION C++&lien=faculte_des_sciences/filiere_informatique/la4.pdf"  id="cc" onclick="suivre('cc')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                      </ul>
                     </td> 
                     <td>INF 162</td>
                     <td>PROGRAMMATION C++</td>
              </tr>
            </tbody>
            </table>
                </div>
             <!--**************************************************************
                     COURS DESTIN&Eacute;S AU ETUDIANTS D'INFORMATIQUE NIVEAU II
             ****************************************************************-->
            <div id="niv2" style="display: none;">
               <div class="matiere-title">Informatique Niveau <br>NIVEAU II:</div>
               <table  border="1" class="cours-display">
                  <thead>
                  <tr>
                    <th>Link</th>
                    <th>Le code</th>
                    <th>Intitulé UE/Cours UE/Course Title </th>   
                </tr>
              </thead>
              <tbody>
                 <tr>
                     <td class="detail" >
                        <ul class="submenu">
                           <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=LANGUE ANGLAISE II&lien=faculte_des_sciences/filiere_informatique/la4.pdf"  id="ang2" onclick="suivre('ang2')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                        </ul>
                     </td> 
                     <td>INF 252</td>
                     <td>LANGUE ANGLAISE II</td>
                 </tr>
                 <tr>
                      <td class="detail" >
                        <ul class="submenu">
                         <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=TH&Eacute;ORIE DES COMPORTEMENT&lien=faculte_des_sciences/filiere_informatique/la4.pdf"  id="thc" onclick="suivre('thc')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                        </ul>
                     </td> 
                     <td>INF 261</td>
                     <td>TH&Eacute;ORIE DES COMPORTEMENT</td>
                </tr> 
                <tr >
                     <td class="detail" >
                        <ul class="submenu">
                          <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=INTRODUCTION &Agrave; LA CRYPTOGRAPHIE&lien=faculte_des_sciences/filiere_informatique/la4.pdf"  id="crypto" onclick="suivre('crypto')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                        </ul>
                    </td> 
                    <td>INF 271</td>
                    <td>INTRODUCTION &Agrave; LA CRYPTOGRAPHIE</td>
                </tr> 
                <tr>
                    <td  class="detail" >
                        <ul class="submenu">
                           <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=ANALYSE II&lien=faculte_des_sciences/filiere_informatique/la4.pdf"  id="annalye2" onclick="suivre('annalye2')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                        </ul>
                    </td> 
                    <td>INF 241</td>
                    <td>ANALYSE II</td>
              </tr> 
              <tr>
                    <td class="detail" >
                        <ul class="submenu">
                          <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=STRUCTURES DE DONNN&Eacute;S&lien=faculte_des_sciences/filiere_informatique/la4.pdf" id="sd" onclick="suivre('sd')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                      </ul>
                    </td> 
                     <td>INF 231</td>
                     <td>STRUCTURES DE DONNN&Eacute;S</td>
              </tr> 
              <tr>
                      <td class="detail" >
                        <ul class="submenu">
                          <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=INTRODUCTION AUX BASES DE DONN&Eacute;ES&lien=faculte_des_sciences/filiere_informatique/la4.pdf"  id="bds" onclick="suivre('bds')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                      </ul>
                    </td> 
                     <td>INF 221</td>
                     <td>INTRODUCTION AUX BASES DE DONN&Eacute;ES</td>
              </tr> 
              <tr>
                     <td class="detail" >
                        <ul class="submenu">
                          <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=P.O.O(Programmation orient&eacute; objet)&lien=faculte_des_sciences/filiere_informatique/la4.pdf" id="java" onclick="suivre('java')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                       </ul>
                     </td> 
                     <td>INF 211</td>
                     <td>P.O.O(Programmation orient&eacute; objet)</td>
              </tr> 
                <tr>
                     <td class="detail" >
                        <ul class="submenu">
                          <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=ELECRONIQUE NUM&Eacute;RIQUE II&lien=faculte_des_sciences/filiere_informatique/la4.pdf"  id="electro2" onclick="suivre('electro2')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                      </ul>
                     </td> 
                     <td>INF 252</td>
                     <td>ELECRONIQUE NUM&Eacute;RIQUE II</td>
              </tr> 
              <tr>
                     <td class="detail" >
                        <ul class="submenu">
                          <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=TH&Eacute;ORIE DES MARCH&Eacute;S&lien=faculte_des_sciences/filiere_informatique/la4.pdf"  id="thm" onclick="suivre('thm')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                       </ul>
                     </td>  
                     <td>INF 272</td>
                     <td>TH&Eacute;ORIE DES MARCH&Eacute;S</td>
              </tr> 
              <tr>
                     <td class="detail" >
                        <ul class="submenu">
                          <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=ALG&Egrave;BRE II&lien=faculte_des_sciences/filiere_informatique/la4.pdf"  id="alg2" onclick="suivre('alg2')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                      </ul>
                    </td> 
                     <td>INF 132</td>
                     <td>ALG&Egrave;BRE II</td>
              </tr> 
              <tr>
                     <td class="detail" >
                        <ul class="submenu">
                           <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=INTRODUCTION AU G&Eacute;NIE-LOGICIEL&lien=faculte_des_sciences/filiere_informatique/la4.pdf"  id="gl" onclick="suivre('gl')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                      </ul>
                    </td> 
                     <td>INF 222</td>
                     <td>INTRODUCTION AU G&Eacute;NIE-LOGICIEL</td>
              </tr> 
                 <tr>
                      <td class="detail" >
                        <ul class="submenu">
                          <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=INTRODUCTION AUX SYST&Egrave;MES D'INFORMATION&lien=faculte_des_sciences/filiere_informatique/la4.pdf"  id="si" onclick="suivre('si')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                      </ul>
                     </td> 
                     <td>INF 212</td>
                     <td>INTRODUCTION AUX SYST&Egrave;MES D'INFORMATION</td>
              </tr>
            </tbody>
            </table>
            
           
                </div>
             <!--**************************************************************
                     
               COURS DESTIN&Eacute;S AU ETUDIANTS D'INFORMATIQUE NIVEAU III


             ****************************************************************-->
             <div id="niv3" style="display: none;">
               <div class="matiere-title">Informatique Niveau <br>NIVEAU III:</div>

              <table  border="1" class="cours-display">
                 <thead>
                  <tr>
                    <th>Link</th>
                    <th>Le code</th>
                    <th>Intitulé UE/Cours UE/Course Title </th>   
                </tr>
              </thead>
              <tbody>
                 <tr>
                     <td class="detail" >
                        <ul class="submenu">
                          <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=INTRODUCTION &Agrave; L'ALGORITHMIQUE&lien=faculte_des_sciences/filiere_informatique/la4.pdf" id="algo" onclick="suivre('algo')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                        </ul>
                     </td> 
                     <td>INF 111</td>
                     <td>INTRODUCTION &Agrave; L'ALGORITHMIQUE</td>
                 </tr>
                 <tr>
                      <td class="detail" >
                        <ul class="submenu">
                         <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=ARCHITECTURE DES ORDINATEURS&lien=faculte_des_sciences/filiere_informatique/la4.pdf" id="archi" onclick="suivre('archi')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                        </ul>
                     </td> 
                     <td>INF 121</td>
                     <td>ARCHITECTURE DES ORDINATEURS</td>
                </tr> 
                <tr >
                     <td class="detail" >
                        <ul class="submenu">
                         <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=PROGRAMMATION STRUCTUR&Eacute;E (C OU PYTHON)&lien=faculte_des_sciences/filiere_informatique/la4.pdf" id="c" onclick="suivre('c')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                        </ul>
                    </td> 
                    <td>INF 131</td>
                    <td>PROGRAMMATION STRUCTUR&Eacute;E (C OU PYTHON)</td>
                </tr> 
                <tr>
                    <td  class="detail" >
                        <ul class="submenu">
                          <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=ANALYSE 1&lien=faculte_des_sciences/filiere_informatique/la4.pdf" id="annalye1" onclick="suivre('annalye1')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                        </ul>
                    </td> 
                    <td>INF 141</td>
                    <td>ANALYSE 1</td>
              </tr> 
              <tr>
                    <td class="detail" >
                        <ul class="submenu">
                          <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=ANALYSE 1&lien=faculte_des_sciences/filiere_informatique/la4.pdf"  id="ang1" onclick="suivre('ang1')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                      </ul>
                    </td> 
                     <td>INF 151</td>
                     <td>LANGUE ANGLAISE 1</td>
              </tr> 
              <tr>
                      <td class="detail" >
                        <ul class="submenu">
                         <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=M&Eacute;CANIQUE I&lien=faculte_des_sciences/filiere_informatique/la4.pdf"  id="meca" onclick="suivre('meca')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                      </ul>
                    </td> 
                     <td>INF 161</td>
                     <td>M&Eacute;CANIQUE I</td>
              </tr> 
              <tr>
                     <td class="detail" >
                        <ul class="submenu">
                          <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=INTRODUCTION A LA PROGRAMMATION FONCTIONNELLE&lien=faculte_des_sciences/filiere_informatique/la4.pdf" onclick="suivre('pf')" id="pf">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                       </ul>
                     </td> 
                     <td>INF 111</td>
                     <td>INTRODUCTION A LA PROGRAMMATION FONCTIONNELLE</td>
              </tr> 
                <tr>
                     <td class="detail" >
                        <ul class="submenu">
                         <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=ELECTRONIQUE NUMERIQUE I&lien=faculte_des_sciences/filiere_informatique/la4.pdf" id="electro" onclick="suivre('electro')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                      </ul>
                     </td> 
                     <td>INF 112</td>
                     <td>ELECTRONIQUE NUMERIQUE I</td>
              </tr> 
              <tr>
                     <td class="detail" >
                        <ul class="submenu">
                           <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=INTRODUCTION AUX R&Eacute;SEAUX&lien=faculte_des_sciences/filiere_informatique/la4.pdf" id="reso" onclick="suivre('reso')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                       </ul>
                     </td>  
                     <td>INF 122</td>
                     <td>INTRODUCTION AUX R&Eacute;SEAUX</td>
              </tr> 
              <tr>
                     <td class="detail" >
                        <ul class="submenu">
                          <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=INTRODUCTION AU SYT&Egrave;MES D'EXLOITATION&lien=faculte_des_sciences/filiere_informatique/la4.pdf"  id="se" onclick="suivre('se')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                      </ul>
                    </td> 
                     <td>INF 132</td>
                     <td>INTRODUCTION AU SYT&Egrave;MES D'EXLOITATION</td>
              </tr> 
              <tr>
                     <td class="detail" >
                        <ul class="submenu">
                          <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=ALG&Egrave;BRE I&lien=faculte_des_sciences/filiere_informatique/la4.pdf"  id="agebre1" onclick="suivre('agebre1')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                      </ul>
                    </td> 
                     <td>INF 142</td>
                     <td>ALG&Egrave;BRE I</td>
              </tr> 
                 <tr>
                      <td class="detail" >
                        <ul class="submenu">
                           <li title="Suivre ce cours" link="fonctions/ajoute_le_cour.php?name=PROGRAMMATION C++&lien=faculte_des_sciences/filiere_informatique/la4.pdf"  id="cc" onclick="suivre('cc')">Suivre</li>
                          <li title="t&eacute;l&eacute;charger ce cours"><a href="faculte_des_sciences/filiere_informatique/la.pdf">T&eacute;l&eacute;charger</a></li>
                      </ul>
                     </td> 
                     <td>INF 162</td>
                     <td>PROGRAMMATION C++</td>
              </tr>
            </tbody>
            </table>
            
                </div>
            </div>
            