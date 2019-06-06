<?php include("../php/connexion.inc.php"); ?>
<?php
if(isset($_POST["nom"])){
  $dbh->query("INSERT INTO `commentaire`(`nomAuteur`, `texte`, `date`) VALUES (\"".$_POST["nom"]."\",\"".$_POST["commentaire"]."\",CURRENT_DATE())");
}
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>

  <!-- Intégrations Map-->
  <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js'></script>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.css' rel='stylesheet' />
  <!-- Google Fonts et info générales -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="../CSS/styles.css">
  <link rel="stylesheet" href="../CSS/commentaires.css">

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
              <li><a href="#"><img src="../CSS/Images/drapeaux/flag-gb.png" alt=""></a></li>
            </ul>
          </li>

      <!-- La page actuelle a son lien désactivé -->
      <li><a href="#">Home</a></li>
      <li class="menu-item-has-children"><a href="#">About Angkor <img src="../CSS/Images/logo/chevron_down.png"  class="chevron"></a><ul class="sub-menu"> <!-- le premier lien n'emmène nulle part , il est donc inactif -->
        <!-- la sous liste imbriquée réprésente les sous onglets , ils sont cachés et apparaissent lorsque le curseur passe par dessus le premier lien -->
          <li><a href="Infos/eng/frise_eng.html">Historical timeline</a></li>
          <li><a href="Infos/eng/systemehydro_eng.html"> Hydrolic system</a></li>
        <li><a href="Infos/eng/monuments_eng.html">Monuments</a></li>
        </ul></li>
      <li class="menu-item-has-children"><a href="#">Useful Info <img src="../CSS/Images/logo/chevron_down.png"  class="chevron"></a>
        <ul class="sub-menu">
          <li><a href="infospratique/eng/infogenerale_eng.html">General Info</a></li>
          <li><a href="infospratique/eng/horaires_eng.html">Schedules of affluence</a></li>
        </ul>
      </li>
      <li><a href="itineraire/eng/itineraire_eng.html">Itineraries</a></li>
      <li class="menu-item-has-children"><a href="#">Around Angkor <img src="../CSS/Images/logo/chevron_down.png"  class="chevron"></a>
        <ul class="sub-menu">
          <li><a href="autour/eng/culture_eng.html">Culture</a></li>
          <li><a href="autour/eng/visiter_eng.html">What to visit <div id="Ptit">aaaaaaa</div></a></li>
        </ul>
      </li>
      <li><a href="voyageur/eng/voyageurs_eng.html">Travelers</a></li>
      <li><a href="commentaires_eng.php">Comments</a></li>
      <li><a href="apropos/eng/apropos_eng.html">About us</a></li>
    </ul>
</nav> <!-- Fin de la barre de navigation -->

</header>
  <div class="Contenu"> <!-- Contenu de la page a partir de la -->
    <h1>Commentaires</h1>
    <p>Vous avez visité Angkor , et/ou vous avez des conseils, anecdotes ou autres ? laissez nous des commentaires et affichez les sur le site !</p>
    <?php
    if(isset($_POST["nom"])){
      ?>
      <div class="Commentaire" style="background-color:blue;">
        <p>Votre Commentaire a été envoyé , il sera inspecté par un administrateur</p>
      </div>
      <?php
    }
     ?>
    <form class="" method="post">
      <table>
        <tr>
          <td><h3>Nom</h3></td>
          <td><input type="text" name="nom" required style="margin-left:2%;"></td>
        </tr>
        <tr>
          <td><h3>Commentaire</h3></td>
          <td><textarea name="commentaire" rows="8" cols="80" required style="margin-left:2%;width:100%"></textarea></td>
        </tr>
      </table>
      <button type="submit" name="button" style="margin-top:2%;">Envoyer votre commentaire</button>
    </form>
    <hr>

    <?php
    $req = $dbh->query("SELECT nomAuteur,texte,date FROM commentaire WHERE statut=\"ACCEPTE\";");
    while ($ligne=$req->fetch()) {
      ?>
      <div class="Commentaire">
        <?php
        echo "<h5>".$ligne[0]." le ".$ligne[2]."</h5>";
        echo "<p>".$ligne[1]."</p>";
         ?>
      </div>
      <?php
    }
    ?>

  </div>



</body>
</html>
