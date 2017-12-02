<html>
    <head>
        <title>Test</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="./CSS/form.css"/>
        <link rel="stylesheet" href="./CSS/cssheader.css">
        <link rel="stylesheet" href="./CSS/footer.css">
        <script src="./JS/script.js"></script>
    </head>
    <body>
    <header class="header-user-dropdown">

            <div class="header-limiter">
                <h1><a href="index.html">Rinck<span>Antonais</span></a></h1>

                <nav>
                    <a href="index.html">Acceuil</a>
                    <a href="formulaire.php">Authentification</a>
                    <a href="fichepresence.php">Fiche de présence</a>
                </nav>
            </div>
        </header>
    <br/>  
    <div class="main-content">
    
            <form class="form-basic" method="post" name="formulaire" action="formulaire-reponse.php">
    
                <div class="form-title-row">
                    <h1>Formulaire</h1>
                </div>
    
                <div class="form-row">
                    <label>
                        <span>Nom</span>
                        <input type="text" name="nom" id="nom" onchange="verifForm();">
                        <span>Prenom</span>
                        <input type="text" name="prenom" id="prenom" onchange="onChangeName();" onchange="verifForm();">
                    </label>
                </div>
    
                <div class="form-row">
                    <label>
                        <span>Email</span>
                        <input type="email" name="email" id="mail_inscription" onchange="verifForm();">
                    </label>
                </div>
                <div class="form-row"> 
                    <label>
                        <span>Date de naissance</span>


                    <!-- Pour certain navigateur compatible on préferera un type date
                         <input type="date" name="date" id="MaDate">  -->


                    </label>
                
                    <?php
                        //Liste déroulante des jours
                        echo "<SELECT name='i' Size='1'>";
                        for($i=1; $i<=31;$i++){
                            if ($i < 10){ 
                                echo "<OPTION>0$i <br></OPTION>";
                            }
                            else {
                                echo "<OPTION>$i <br></OPTION>";
                            }
                        }
                        echo "</SELECT>";
                        echo '<SELECT name="d" Size="1">';
                        //Liste déroulante des mois
                        for($d=1; $d<=12;$d++){ 
                            if ($d < 10){ 
                                echo "<OPTION>0$d <br></OPTION>";
                            }
                            else {
                                echo "<OPTION>$d <br></OPTION>";
                            }
                        }
                        //Liste déroulante des années (de 1950 à maintenant)
                        echo "</SELECT>";
                        $date = date('Y'); 
                        echo '<SELECT name="y" Size="1">';
                        for ($y=1950; $y<=$date; $y++) { 
                            echo "<OPTION><br>$y <br></OPTION>"; }
                        echo "</SELECT>";
                    ?>

                        
    
                </div>
    
    
                <div class="form-row">
                    <label>
                        <span>Poids (Kg)</span>
                        <input type="number" id="Poids" onchange="main();"/>
                        <span>Taille (Cm)</span>
                        <input type="number" id="Taille" onchange="main();"/>
                    </label>
                </div>


                <div class="form-row">
                    <label>
                        <span>Mot de passe</span>
                        <input type="password" id="mdp" onchange="verifForm();"/>
                        <span>Confirmation</span>
                        <input type="password" id="Mdp" onchange="ValidMdp();" onchange="verifForm();"/>
                    </label>
                </div>             
    

                <div class="form-row">
                    <label>
                        <span>Textarea</span>
                        <textarea name="textarea"></textarea>
                    </label>
                </div>

                <div class="form-row">
                    <label><span>Radio</span></label>
                    <div class="form-radio-buttons">
    
                        <div>
                            <label>
                                <input type="radio" name="sexe" value="H" checked>
                                <span>Homme</span>
                            </label>
                        </div>
    
                        <div>
                            <label>
                                <input type="radio" name="sexe" value="F">
                                <span>Femme</span>
                            </label>
                        </div>
    
    
                    </div>
                </div>
                            
                <div class="form-row">
                    <center><input type="submit" id="Validation" value="Valider" hidden="true" disabled="true"/></center>
                    <br/>
                </div>
    
            </form>
    
        </div>

    <br/>
    <footer class="footer-basic-centered">
        <p class="footer-company-motto">Rinckontact.</p>
            <ul class="social" id="css3">
                <p class="footer-links">
                <li class="facebook">
                    <a href="https://www.facebook.com/"><strong>Facebook</strong></a>
                </li>
                <li class="flickr">
                    <a href="https://www.flickr.com/"><strong>Flickr</strong></a>
                </li>
                <li class="linkedin">
                    <a href="https://www.linkedin.com/"><strong>LinkedIn</strong></a>
                </li>
                <li class="gmail">
                    <a href="https://mail.google.com/mail/"><strong>Gmail</strong></a>
                </li>
                <li class="twitter">
                    <a href="https://twitter.com/"><strong>Twitter</strong></a>
                </li>
            </ul>  
        <br/><br/><br/>
        </p>
    </footer>
    </body>
    </html> 