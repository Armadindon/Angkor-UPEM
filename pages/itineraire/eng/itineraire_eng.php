<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />

  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="../../../CSS/styles.css">
  <link rel="stylesheet" href="../../../CSS/Itineraires.css">
  <meta charset="utf-8">
  <title>National Site of Angkor</title>
</head>
<body>

  <header>
    <nav class="main-navigation">
    <ul class="menu">
      <li class="menu-item-has-children" id="lang-button"><a href="#"> <img src="../../../CSS/Images/drapeaux/language.png" alt=""></a>
            <ul class="sub-menu" id="language">
              <li><a href="../itineraire.html"> <img src="../../../CSS/Images/drapeaux/flag-fr.png" alt=""> </a></li>
              <li><a href="#"><img src="../../../CSS/Images/drapeaux/flag-gb.png" alt=""></a></li>
            </ul>
          </li>

      <!-- La page actuelle a son lien désactivé -->
      <li><a href="../../../index_eng.php">Home</a></li>
      <li class="menu-item-has-children"><a href="#">About Angkor <img src="../../../CSS/Images/logo/chevron_down.png"  class="chevron"></a><ul class="sub-menu"> <!-- le premier lien n'emmène nulle part , il est donc inactif -->
        <!-- la sous liste imbriquée réprésente les sous onglets , ils sont cachés et apparaissent lorsque le curseur passe par dessus le premier lien -->
          <li><a href="../../Infos/eng/frise_eng.html">Historical timeline</a></li>
          <li><a href="../../Infos/eng/systemehydro_eng.html"> Hydrolic system</a></li>
        <li><a href="../../Infos/eng/monuments_eng.html">Monuments</a></li>
        </ul></li>
      <li class="menu-item-has-children"><a href="#">Useful Info <img src="../../../CSS/Images/logo/chevron_down.png"  class="chevron"></a>
        <ul class="sub-menu">
          <li><a href="../../infospratique/eng/infogenerale_eng.html">General Info</a></li>
          <li><a href="../../infospratique/eng/horaires_eng.html">Schedules of affluence</a></li>
        </ul>
      </li>
      <li><a href="itineraire_eng.php">Itineraries</a></li>
      <li class="menu-item-has-children"><a href="#">Around Angkor <img src="../../../CSS/Images/logo/chevron_down.png"  class="chevron"></a>
        <ul class="sub-menu">
          <li><a href="../../autour/eng/culture_eng.html">Culture</a></li>
          <li><a href="../../autour/eng/visiter_eng.html">What to visit <div id="Ptit">aaaaaaa</div></a></li>
        </ul>
      </li>
      <li><a href="../../voyageur/eng/voyageurs_eng.html">Travelers</a></li>
      <li><a href="../../apropos/eng/apropos_eng.html">About us</a></li>
    </ul>
</nav> <!-- Fin de la barre de navigation -->

<?php if (isset($_POST["submit"])) {
      $score = $_POST["time"]+$_POST["famous"]+$_POST["aspects"]; ?>
      <h2>Itinéraire conseillé pour visiter Angkor</h2>
<?php
      if ($score >= $score/3) { ?>
          <iframe id="Itinéraires" src="https://www.google.com/maps/d/embed?mid=1q7ldLKjQDK9yM94PuQWXm2HpDjGmLYy0"></iframe>
          <p>Petit trajet : Pour les plus pressés (<span id="blue">en bleu</span>)</p>
          <ol>
            <li>Angkor Vat</li>
            <li>Phnom Bakheng</li>
            <li>Temple de Bayon</li>
            <li>Baphuon</li>
            <li>Terrasse des Elephants</li>
            <li>Terrasse du Roi Lépreux</li>
            <li>Thommanon</li>
            <li>Chau Say Tevoda</li>
            <li>Ta Keo</li>
            <li>Ta Phrom</li>
            <li> Banteay Kdei</li>
            <li>Sra Sang</li>
            <li>Prasat Kravan</li>
          </ol>
      <?php } else { ?>
          <iframe id="Itinéraires" src="https://www.google.com/maps/d/embed?mid=1q7ldLKjQDK9yM94PuQWXm2HpDjGmLYy0"></iframe>
          <p>Grand trajet : Pour les plus courageux (<span id="red">en rouge</span>)</p>
          <ol>
            <li>Angkor Vat</li>
            <li>Phnom Bakheng et Baksei Chamkrong</li>
            <li>Angkor Thom</li>
            <li>Preah Khan</li>
            <li>Neak Pean</li>
            <li>Mébon Oriental</li>
            <li>Pre Rup</li>
            <li>Ta Som</li>
          </ol>
      <?php }
} ?>
