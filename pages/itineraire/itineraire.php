<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />

  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="../../CSS/styles.css">
  <link rel="stylesheet" href="../../CSS/Itineraires.css">
  <meta charset="utf-8">
  <title>Site National D'Angkor</title>
</head>
<body>

  <header>
    <nav class="main-navigation">
    <ul class="menu">
      <li class="menu-item-has-children" id="lang-button"><a href="#"> <img src="../../CSS/Images/drapeaux/language.png" alt=""></a>
            <ul class="sub-menu" id="language">
              <li><a href="index.php"> <img src="../../CSS/Images/drapeaux/flag-fr.png" alt=""> </a></li>
              <li><a href="index_eng.html"><img src="../../CSS/Images/drapeaux/flag-gb.png" alt=""></a></li>
            </ul>
          </li>

      <!-- La page actuelle a son lien désactivé -->
      <li><a href="../../index.php">Accueil</a></li>
      <li class="menu-item-has-children"><a href="#">Sur Angkor <img src="../../CSS/Images/logo/chevron_down.png"  class="chevron"></a><ul class="sub-menu"> <!-- le premier lien n'emmène nulle part , il est donc inactif -->
        <!-- la sous liste imbriquée réprésente les sous onglets , ils sont cachés et apparaissent lorsque le curseur passe par dessus le premier lien -->
          <li><a href="../Infos/frise.html">Frise Chronologique</a></li>
          <li><a href="../Infos/systemehydro.html">Système Hydraulique</a></li>
        <li><a href="../Infos/monuments.html">Monuments</a></li>
        </ul></li>
      <li class="menu-item-has-children"><a href="#">Informations Pratiques <img src="../../CSS/Images/logo/chevron_down.png"  class="chevron"></a>
        <ul class="sub-menu">
          <li><a href="../infospratique/infogenerale.html">Informations Générales</a></li>
          <li><a href="../infospratique/horaires.html">Horaires D'Affluence</a></li>
        </ul>
      </li>
      <li><a href="#">Itinéraires</a></li>
      <li class="menu-item-has-children"><a href="#">Autour D'Angkor <img src="../../CSS/Images/logo/chevron_down.png"  class="chevron"></a>
        <ul class="sub-menu">
          <li><a href="../autour/culture.html">Culture</a></li>
          <li><a href="../autour/visiter.html">Que Visiter <div id="Ptit">aaaaaaa</div></a></li>
        </ul>
      </li>
      <li><a href="../voyageur/voyageurs.html">Voyageurs</a></li>
      <li><a href="../apropos/apropos.html">A propos</a></li>
    </ul>
</nav> <!-- Fin de la barre de navigation -->

  </header>
  <div class="Contenu">
      <h2>Itinéraires</h2>
      <p>Cet onglet a pour but de préparer pour vous un itinéraire de visite d'Angkor.</p>
      <br>
      <h3>Questionnaire</h3>
      <h5>Répondez aux questions suivantes</h5>
    <form action="itineraire2.php" method="post">
        <p>Une visite sur ...</p>
        <input type="radio" name="famous" value="1" id="f1" checked>
        <label for="f1"> les temples les plus visités</label>
        <br>
        <input type="radio" name="famous" value="0" id="f2">
        <label for="f1"> les temples moins touristiques</label>
        <br>
        <br>
        
        <p>Une visite sur les aspects ...</p>
        <input type="radio" name="aspects" value="0" id="a1" checked>
        <label for="a1"> environnementaux</label>
        <br>
        <input type="radio" name="aspects" value="1" id="a2">
        <label for="a2"> architecturaux</label>
        
        <br>
        <br>
        <p>Une visite qui dure ...</p>
        <input type="radio" name="time" value="1" id="t1" checked>
        <label for="t1"> 1 jour</label>
        <br>
        <input type="radio" name="time" value="0" id="t2">
        <label for="t2"> entre 3 et 7 jours</label>
        <br>
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
    <!-- Itinéraire fait sur google My Maps et intégré sur le site via un iframe -->
    <br>

    
    </div>


  </body>
  </html>