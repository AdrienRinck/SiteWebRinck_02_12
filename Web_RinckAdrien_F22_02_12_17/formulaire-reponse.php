<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="./CSS/cssheader.css">
    <link rel="stylesheet" href="./CSS/reception.css">
    <link rel="stylesheet" href="./CSS/footer.css">
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


    <h1><center> FORMULAIRE </center></h1>

    <?php $nom=$_POST['nom'];
          $prenom=$_POST['prenom'];
          $age=$_POST['y'];
          $sexe=$_POST['sexe'];

          $age=date("Y")-$age;
          
          if ($sexe=="H"){
              $sexe="Monsieur";
          }else{ 
              $sexe="Madame";
          }
          
          echo("<center>Bonjour $sexe $nom $prenom<br/> Vous avez $age ans<br/></center>");
          settype($age,"integer");   

          if (isSet($_COOKIE['compteur'])){
              $message = "<center>Vous êtes déjà venu {$_COOKIE['compteur']} fois </br></center>";
              $valeur = $_COOKIE['compteur'] + 1;
          }else{
              $message = "<center>C'est votre première visite</center>";
              $valeur = 1;
          }
          SetCookie ('compteur', $valeur);
      
          echo $message;

          $date=date("d-m-Y H-i-s");
          SetCookie("DateConnexion",$date);

          if ($sexe=="Monsieur"){
              echo'<style type="text/css"> 
                body {
                    background-image:url("./image/fondhomme.jpg");
                }</style>';
            }
            else{
                echo'<style type="text/css">
                body {
                    background-color:pink;
            }</style>';
        }
    ?>  
    <center><img src="image/logo1.png"/></center>
    <br/><br/>




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