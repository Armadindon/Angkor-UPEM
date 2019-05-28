<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>

  <!-- Intégrations Map-->
  <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js'></script>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.css' rel='stylesheet' />
  <!-- Google Fonts et info générales -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="CSS/styles.css">
  <link rel="stylesheet" href="CSS/Accueil.css">
  <meta charset="utf-8">
  <title>Site National D'Angkor</title>
</head>
<body>

  <header>
    <nav class="main-navigation">
    <ul class="menu">
      <li class="menu-item-has-children" id="lang-button"><a href="#"> <img src="CSS/Images/drapeaux/language.png" alt=""></a>
            <ul class="sub-menu" id="language">
              <li><a href="index.php"> <img src="CSS/Images/drapeaux/flag-fr.png" alt=""> </a></li>
              <li><a href="#"><img src="CSS/Images/drapeaux/flag-gb.png" alt=""></a></li>
            </ul>
          </li>

      <!-- La page actuelle a son lien désactivé -->
      <li><a href="#">Home</a></li>
      <li class="menu-item-has-children"><a href="#">About Angkor <img src="CSS/Images/logo/chevron_down.png"  class="chevron"></a><ul class="sub-menu"> <!-- le premier lien n'emmène nulle part , il est donc inactif -->
        <!-- la sous liste imbriquée réprésente les sous onglets , ils sont cachés et apparaissent lorsque le curseur passe par dessus le premier lien -->
          <li><a href="pages/Infos/eng/frise_eng.html">Historical timeline</a></li>
          <li><a href="pages/Infos/eng/systemehydro_eng.html"> Hydrolic system</a></li>
        <li><a href="pages/Infos/eng/monuments_eng.html">Monuments</a></li>
        </ul></li>
      <li class="menu-item-has-children"><a href="#">Useful Info <img src="CSS/Images/logo/chevron_down.png"  class="chevron"></a>
        <ul class="sub-menu">
          <li><a href="pages/infospratique/eng/infogenerale_eng.html">General Info</a></li>
          <li><a href="pages/infospratique/eng/horaires_eng.html">Schedules of affluence</a></li>
        </ul>
      </li>
      <li><a href="pages/itineraire/eng/itineraire_eng.html">Itineraries</a></li>
      <li class="menu-item-has-children"><a href="#">Around Angkor <img src="../../../CSS/Images/logo/chevron_down.png"  class="chevron"></a>
        <ul class="sub-menu">
          <li><a href="pages/autour/eng/culture_eng.html">Culture</a></li>
          <li><a href="pages/autour/eng/visiter_eng.html">What to visit <div id="Ptit">aaaaaaa</div></a></li>
        </ul>
      </li>
      <li><a href="pages/voyageur/eng/voyageurs_eng.html">Travelers</a></li>
      <li><a href="pages/²apropos/eng/apropos_eng.html">About us</a></li>
    </ul>
</nav> <!-- Fin de la barre de navigation -->

</header>
<div class="Contenu"> <!-- Contenu de la page a partir de la -->

  <!-- iframe d'une vidéo d'arte sur le site D'Angkor -->
  <iframe allowfullscreen="true" style="transition-duration:0;transition-property:no;margin:0 auto;position:relative;display:block;background-color:#000000;" frameborder="0" scrolling="no" width="100%" height="100%" src="https://www.arte.tv/player/v3/index.php?json_url=https%3A%2F%2Fapi.arte.tv%2Fapi%2Fplayer%2Fv1%2Fconfig%2Ffr%2F081881-001-A%3Fautostart%3D1%26lifeCycle%3D1&amp;lang=fr_FR&amp;mute=1"></iframe>

  <!-- "Boite" contenant une anecdote , a terme , celle-ci sera choisie dans une base de données -->
  <div class="Anecdote">
    <h3>Anecdote</h3>
    <?php
    $req1 = "SELECT COUNT(*) FROM anecdote";
    $index = $dbh->query($req1);
    $nbRandom = rand(0, $index-1);
    $req2 = "SELECT texte FROM anecdote WHERE idAnecdote=$index";
    $anecdote = $dbh->query($req2)["texte"];
    echo "<p>".$anecdote."</p>";
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
