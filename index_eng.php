<?php include("php/connexion.inc.php");
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
  <link rel="stylesheet" href="CSS/styles.css">
  <link rel="stylesheet" href="CSS/Accueil.css">

  <!-- CARROUSSEL -->
  <!--CSS-->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>



  <!--JS-->
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function(){
    $('.slider').slick({
      infinite: true,
      autoplay:true
    });
  });
  </script>


  <meta charset="utf-8">
  <title>National Site of Angkor</title>
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
      <li class="menu-item-has-children"><a href="#">Around Angkor <img src="CSS/Images/logo/chevron_down.png"  class="chevron"></a>
        <ul class="sub-menu">
          <li><a href="pages/autour/eng/culture_eng.html">Culture</a></li>
          <li><a href="pages/autour/eng/visiter_eng.html">What to visit <div id="Ptit">aaaaaaa</div></a></li>
        </ul>
      </li>
      <li><a href="pages/voyageur/eng/voyageurs_eng.html">Travelers</a></li>
      <li><a href="pages/commentaires_eng.php">Comments</a></li>
      <li><a href="pages/apropos/eng/apropos_eng.html">About us</a></li>
    </ul>
</nav> <!-- Fin de la barre de navigation -->

</header>
<div class="Contenu"> <!-- Contenu de la page a partir de la -->
  <div class="slider">
    <?php
    $req = $dbh->query("SELECT * FROM Slider;");
    while ($ligne = $req->fetch()) {
      if ($ligne[2]==null) {
        echo "<div>".$ligne[1]."</div>";
      }else{
        echo "<div><img src=\"".utf8_encode($ligne[3])."\"></div>";
      }
    }
     ?>
  </div>
  <!-- iframe d'une vidéo d'arte sur le site D'Angkor -->


  <!-- "Boite" contenant une anecdote , a terme , celle-ci sera choisie dans une base de données -->
  <div class="Anecdote">
    <h3>Anecdote</h3>
    <?php
    try {
      $req1 = "SELECT texte FROM anecdote WHERE language=\"EN\";";
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
