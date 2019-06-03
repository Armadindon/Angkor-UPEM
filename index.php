<?php include("php/connexion.inc.php");
 ?>
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
  <link rel="stylesheet" href="CSS/styles.css">
  <link rel="stylesheet" href="CSS/Accueil.css">
  <!-- JS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.slider').bxSlider();
    });
  </script>

  <meta charset="utf-8">
  <title>Site National D'Angkor</title>
</head>
<body>

  <!-- Le Header , celui-ci étant présent sur toute les pages , il sera détaillé que sur cette page -->

  <header>
    <nav class="main-navigation">
    <ul class="menu">
      <li class="menu-item-has-children" id="lang-button"><a href="#"> <img src="CSS/Images/drapeaux/language.png" alt=""></a>
            <ul class="sub-menu" id="language">
              <li><a href="index.php"> <img src="CSS/Images/drapeaux/flag-fr.png" alt=""> </a></li>
              <li><a href="index_eng.php"><img src="CSS/Images/drapeaux/flag-gb.png" alt=""></a></li>
            </ul>
          </li>

      <!-- La page actuelle a son lien désactivé -->
      <li><a href="index.php">Accueil</a></li>
      <li class="menu-item-has-children"><a href="#">Sur Angkor <img src="CSS/Images/logo/chevron_down.png"  class="chevron"></a><ul class="sub-menu"> <!-- le premier lien n'emmène nulle part , il est donc inactif -->
        <!-- la sous liste imbriquée réprésente les sous onglets , ils sont cachés et apparaissent lorsque le curseur passe par dessus le premier lien -->
          <li><a href="pages/Infos/frise.html">Frise Chronologique</a></li>
          <li><a href="pages/Infos/systemehydro.html">Système Hydrauliques</a></li>
        <li><a href="pages/Infos/monuments.html">Monuments</a></li>
        </ul></li>
      <li class="menu-item-has-children"><a href="#">Informations Pratiques<img src="CSS/Images/logo/chevron_down.png"  class="chevron"></a>
        <ul class="sub-menu">
          <li><a href="pages/infospratique/infogenerale.html">Informations pratiques</a></li>
          <li><a href="pages/infospratique/horaires.html">Horaires d'affluence</a></li>
        </ul>
      </li>
      <li><a href="pages/itineraire/itineraire.html">Itinéraires</a></li>
      <li class="menu-item-has-children"><a href="#">Autour d'Angkor<img src="CSS/Images/logo/chevron_down.png"  class="chevron"></a>
        <ul class="sub-menu">
          <li><a href="pages/autour/culture.html">Culture</a></li>
          <li><a href="pages/autour/visiter.html">Que visiter<div id="Ptit">aaaaaaa</div></a></li>
        </ul>
      </li>
      <li><a href="pages/voyageur/voyageurs.html">Voyageurs</a></li>
      <li><a href="pages/commentaires.php">Commentaires</a></li>
      <li><a href="pages/apropos/apropos.html">A Propos</a></li>
    </ul>
</nav> <!-- Fin de la barre de navigation -->

  </header>
  <div class="Contenu"> <!-- Contenu de la page a partir de la -->
    <!-- iframe d'une vidéo d'arte sur le site D'Angkor -->
    <div class="slider">
      <div class="">
        <p>YEEEEEEEEEEEEEEEEEEEEEEEEEEEES</p>
      </div>
    <div><iframe allowfullscreen="true" style="transition-duration:0;transition-property:no;margin:0 auto;position:relative;display:block;background-color:#000000;" frameborder="0" scrolling="no" width="100%" height="100%" src="https://www.arte.tv/player/v3/index.php?json_url=https%3A%2F%2Fapi.arte.tv%2Fapi%2Fplayer%2Fv1%2Fconfig%2Ffr%2F081881-001-A%3Fautostart%3D1%26lifeCycle%3D1&amp;lang=fr_FR&amp;mute=1"></iframe></div>

  </div>

    <!-- "Boite" contenant une anecdote , a terme , celle-ci sera choisie dans une base de données -->
    <div class="Anecdote">
      <h3>Anecdote</h3>
      <?php
      try {
        $req1 = "SELECT texte FROM anecdote;";
        $index = $dbh->query($req1)->fetchall();

        echo  utf8_encode("<p>".$index[rand(0,count($index)-1)]["texte"]."</p>");
      } catch (\Exception $e) {
        echo "ALED";
      }


       ?>
    </div>

    <!-- Carte générée a partir d'une API de chez MapBox -->
    <hr>
    <div id='map'></div>
    <script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiYXJtYWRpbmRvbiIsImEiOiJjanFnbmN4bzUwMGNtNDJwcWI0ZjQwMzdlIn0.nXQZ0vYO6txUmUgWgiPTrw';
    const map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/armadindon/cjqgq2lph02xw2smwm67ogld6',
      center: [103.867,13.412],
      zoom: 16.0
    });
    </script>

  </div>



</body>
</html>
