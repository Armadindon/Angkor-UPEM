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

  <!-- Le Header , celui-ci étant présent sur toute les pages , il sera détaillé que sur cette page -->

  <header>
    <nav class="main-navigation">
    <ul class="menu">
      <li class="menu-item-has-children" id="lang-button"><a href="#"> <img src="CSS/Images/drapeaux/language.png" alt=""></a>
            <ul class="sub-menu" id="language">
              <li><a href="index.php"> <img src="CSS/Images/drapeaux/flag-fr.png" alt=""> </a></li>
              <li><a href="index_eng.html"><img src="CSS/Images/drapeaux/flag-gb.png" alt=""></a></li>
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
      <li><a href="pages/itineraire/itineraire.html">Itinéraire</a></li>
      <li class="menu-item-has-children"><a href="#">Autour d'Angkor<img src="CSS/Images/logo/chevron_down.png"  class="chevron"></a>
        <ul class="sub-menu">
          <li><a href="pages/autour/culture.html">Culture</a></li>
          <li><a href="pages/autour/visiter.html">Que visiter<div id="Ptit">aaaaaaa</div></a></li>
        </ul>
      </li>
      <li><a href="pages/apropos/apropos.html">A Propos</a></li>
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
      $Anecdotes = array("50% des touristes internationaux visitent le Cambodge pour voir ce monument religieux. Comme pour montrer à quel point ils sont fiers de leur patrimoine, le monument figure sur leur drapeau national. Le drapeau actuel de l'Afghanistan est le seul autre drapeau national à comporter un monument national.","Angkor Vat est la meilleure représentation du style classique de l'architecture khmère.","Le temple a été construit pour représenter le Mont Meru, la demeure du seigneur de la mythologie hindoue de Brahma et des demi-dieux devtas.","Contrairement aux autres temples de la région qui sont orientés vers l'est, ce temple était orienté vers l'ouest. Il fait face au coucher du soleil et le soleil du soir ajoute à sa beauté le soir.","Ce n'est qu'au XVIe siècle que le temple fut connu sous son nom actuel. Auparavant, il était connu sous le nom de Pisnulok, le titre officiel du roi khmer Suryavarman II qui l'a construit.","En reconnaissance du rôle important qu'elle a joué dans l'hindouisme et le bouddhisme, l'UNESCO l'a déclarée site du patrimoine mondial en 1992.","Bien que la plupart des touristes connaissent le complexe du temple d'Angkor Vat, la ville comprend Angkor Thom et le temple du Bayon qui sont également intrigants.","Contrairement à ses prédécesseurs qui appartenaient à la lignée des rois qui pratiquaient le \"Shaivisme\" et donc leur Dieu suprême était le Seigneur Shiva ; Suryavarman II a rompu avec eux et a construit ce temple dédié au Seigneur Vishnu.","Les décorations sur les murs du temple ont un caractère hindou unique qui raconte une histoire. Ils ont des fables et des images de mythes qui racontent l'origine du temple dans la religion hindoue.","Le site reçoit plus de 2 millions de visiteurs chaque année pour une raison bien précise : il dégage une aura de divinité que l'on ne trouve que dans les sanctuaires incas et mayas.Angkor Wat est un spectacle à voir. C'est une belle toile de fond que l'on chérit pour toujours. Sa beauté appartient plus aux cartes postales qu'à la réalité... et pourtant, le temple est aussi réel qu'ils viennent. Si je ne le savais pas, je dirais que le temple est un vaisseau spatial alien prêt à s'envoler dans l'espace à tout moment.");
      echo "<p>".$Anecdotes[rand(0,count($Anecdotes))]."</p>";
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
