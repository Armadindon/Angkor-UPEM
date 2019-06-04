<?php include("../php/connexion.inc.php");?>
<?php if(isset($_POST["login"])){
  $req = $dbh -> query("SELECT * FROM ADMIN WHERE login=\"".$_POST["login"]."\" AND mdp=SHA1(\"".$_POST["mdp"]."\");");
  if($req->rowCount() > 0){
    $_SESSION["login"] = $req->fetch()[1];
    $status = 0;
  }else{
    $status = 1;
  }
}  ?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>

  <!-- Intégrations Map-->
  <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js'></script>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.css' rel='stylesheet' />
  <!-- Google Fonts et info générales -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="../CSS/styles.css">

  <meta charset="utf-8">
  <title>Site National D'Angkor</title>
</head>
<body>

  <!-- Le Header , celui-ci étant présent sur toute les pages , il sera détaillé que sur cette page -->

  <header>
    <nav class="main-navigation">
    <ul class="menu">
      <li class="menu-item-has-children" id="lang-button"><a href="#"> <img src="../CSS/Images/drapeaux/language.png" alt=""></a>
            <ul class="sub-menu" id="language">
              <li><a href="index.php"> <img src="../CSS/Images/drapeaux/flag-fr.png" alt=""> </a></li>
              <li><a href="index_eng.php"><img src="../CSS/Images/drapeaux/flag-gb.png" alt=""></a></li>
            </ul>
          </li>

      <!-- La page actuelle a son lien désactivé -->
      <li><a href="../index.php">Accueil</a></li>
      <li class="menu-item-has-children"><a href="#">Sur Angkor <img src="../CSS/Images/logo/chevron_down.png"  class="chevron"></a><ul class="sub-menu"> <!-- le premier lien n'emmène nulle part , il est donc inactif -->
        <!-- la sous liste imbriquée réprésente les sous onglets , ils sont cachés et apparaissent lorsque le curseur passe par dessus le premier lien -->
          <li><a href="../pages/Infos/frise.html">Frise Chronologique</a></li>
          <li><a href="../pages/Infos/systemehydro.html">Système Hydrauliques</a></li>
        <li><a href="../pages/Infos/monuments.html">Monuments</a></li>
        </ul></li>
      <li class="menu-item-has-children"><a href="#">Informations Pratiques<img src="../CSS/Images/logo/chevron_down.png"  class="chevron"></a>
        <ul class="sub-menu">
          <li><a href="../pages/infospratique/infogenerale.html">Informations pratiques</a></li>
          <li><a href="../pages/infospratique/horaires.html">Horaires d'affluence</a></li>
        </ul>
      </li>
      <li><a href="../pages/itineraire/itineraire.html">Itinéraire</a></li>
      <li class="menu-item-has-children"><a href="#">Autour d'Angkor<img src="../CSS/Images/logo/chevron_down.png"  class="chevron"></a>
        <ul class="sub-menu">
          <li><a href="../pages/autour/culture.html">Culture</a></li>
          <li><a href="../pages/autour/visiter.html">Que visiter<div id="Ptit">aaaaaaa</div></a></li>
        </ul>
      </li>
      <li><a href="../pages/apropos/apropos.html">A Propos</a></li>
    </ul>
</nav> <!-- Fin de la barre de navigation -->

  </header>

  <div class="Contenu">
    <?php
      if(isset($_SESSION["login"])){
        if (isset($_POST["submit"])) {
          $password = $_POST["pass"];
          $confirmation = $_POST["confirmation"];
          $log = $_SESSION["login"];
          if ($password == $confirmation) {
            $p = sha1($password);
            $req = "UPDATE ADMIN SET mdp='$p' WHERE login LIKE '$log'";
          }
        } ?>

        <form method="post" action="">
          <p>Nouveau mot de passe</p><input type="password" name="pass" required>
          <p>Confirmation mot de passe</p><input type="password" name="confirmation" required><br>
          <button type="submit" name="button">Se connecter</button>
        </form>
    <?php  } ?>








  </div>





</body>
</html>
