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
      <li><a href="../../commentaires_eng.php">Comments</a></li>
      <li><a href="../../apropos/eng/apropos_eng.html">About us</a></li>
    </ul>
</nav> <!-- Fin de la barre de navigation -->

</header>

<div class="Contenu">

      <?php if (isset($_POST["submit"])) {
              $famous = $_POST["famous"];
              // $famous permet de savoir si l'utilisateur veut visiter des temples connus ou non
              $time = $_POST["time"];
              // $time contient le temps que l'utilisateur a pour visiter le site
              ?>
            <h2>Adviced Itineraries for Angkor</h2>
      <?php
      //Plusieurs itinéraires selon les réponses de l'utilisateur
          if ($famous == 1) {

            if ($time==0) { ?>
              <iframe src="https://www.google.com/maps/d/embed?mid=1q7ldLKjQDK9yM94PuQWXm2HpDjGmLYy0"></iframe>
              <p>Well known Temples</p>
              <p>Little Journey</p>
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

            <?php }
            elseif ($time == 1) { ?>
              <iframe src="https://www.google.com/maps/d/embed?mid=1kcugqxNTBbI0RjU18jW1NbCw7pyLBjrb"></iframe>
              <p>Well known Temples</p>
              <p>Medium Journey</p>
              <ol>
                <li>Angkor Vat</li>
                <li>Preah Khan</li>
                <li>Ta Som</li>
                <li>Mebon oriental</li>
                <li>Prè Rup</li>
                <li>Ta Prohm</li>
                <li>Angkor Thom</li>
                <li>Neak Pean</li>
                <li>Phnom Bakheng</li>
                <li>Srah Srang</li>
              </ol>
            <?php }
            else if ($time==2) {?>

              <iframe src="https://www.google.com/maps/d/embed?mid=1Y3mDBszsPq9OQAOIS_g74SsVOUogPLiN"></iframe>

                <p>Well known Temples</p>
              <p>Big trip</p>
              <ol>
                <li>Angkor Wat</li>
                <li>Ta Prohm Kel Temple</li>
                <li>Phnom Bakheng</li>
                <li>Temple Baksei Chamkrong</li>
                <li>Angkor Thom</li>
                <li>Baphuon</li>
                <li>Terrasse des éléphants</li>
                <li>Terrasse du Roi lépreux</li>
                <li>Thommanon</li>
                <li>Chau Say Tevoda</li>
                <li>Ta Keo</li>
                <li>Ta Prohm</li>
                <li>Srah Srang</li>
                <li>Banteay Kdei</li>
                <li>Prasat Kravan</li>
                <li>Preah Khan</li>
                <li>Neak Pean</li>
                <li>Ta Som</li>
                <li>Prè Rup</li>
                <li>Mebon oriental</li>
                <li>Chan Ta Uon Temple</li>
                <li>Banteay Thom Temple</li>
                <li>Banteay Srei</li>
                <li>Bakong</li>
                <li>Preah Ko</li>
                <li>Lolei</li>
                <li>BanteaySamré</li>
                <li>Beng Mealea</li>
                <li>Prasat Prei Monti</li>
                <li>Kong Phlouk Temple</li>
              </ol>
            <?php }
          } else { ?>
              <iframe src="https://www.google.com/maps/d/embed?mid=1fka2l9gHIU87ys7tjWKZ2VYPUDRpKb-a"></iframe>
                <p>Little kwown Temples</p>
                <ol>
                  <li>Sambor Prei Kuk</li>
                  <li>Phnom Santuk</li>
                  <li>Temple de Preah Vihear</li>
                  <li>Beng Mealea</li>
                  <li>Banteay Chhmar</li>
                  <li>Kaoh Ker</li>
                </ol>
        <?php  }
} ?>
</div>

</body>
</html>
