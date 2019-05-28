<header>
  <nav class="main-navigation">
  <ul class="menu">
    <li class="menu-item-has-children" id="lang-button"><a href="#"> <img src="<?php echo realpath("../CSS/Images/drapeaux/language.png"); ?>" alt=""></a>
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
