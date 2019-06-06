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
      <?php if (isset($_SESSION["login"])) { ?>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="gestionComm.php">Gérer les commentaires</a></li>
          <li><a href="changePassword.php">Changer de mot de passe</a></li>
          <li><a href="addAdmin.php">Gérer les admins</a></li>
          <li><a href="gestionSlider.php">Gérer le slider de l'acceuil</a></li>
          <li><a href="../index.php">Retour vers le site</a></li>
          <li><a href="../php/disconnect.php">Déconnexion</a></li>
      <?php } else { ?>
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
      <li><a href="../pages/voyageurs/voyageurs.html">Voyageurs</a></li>
      <li><a href="../pages/commentaires.php">Commentaires</a></li>
      <li><a href="../pages/apropos/apropos.html">A Propos</a></li>
    <?php } ?>
    </ul>
</nav> <!-- Fin de la barre de navigation -->

</header>
    <?php if (isset($_SESSION["login"])) { ?>
      <div class="Contenu">
    <?php if (isset($_POST["submit"])) {
      $login = $_POST["login"];
      $password = sha1($_POST["mdp"]);
      $req = "INSERT INTO ADMIN (login, mdp) VALUES ('$login', '$password')";
      try {
        $dbh->query($req);
        echo "<p>Nouvel admin ajouté !</p>";
        header("refresh:1; url=index.php");
      } catch (Exception $e) {
        echo "<p>Erreur, le nouvel admin n'a pas pu être ajouté</p>";
      }
    } elseif (isset($_POST["submitDelete"])) {
      $log = $_POST["delete"];
      $req = "DELETE FROM ADMIN WHERE login LIKE '$log'";
      try {
        $dbh->query($req);
        echo "<p>Admin supprimé !</p>";
        header("refresh:1; url=index.php");
      } catch (Exception $e) {
        echo "<p>Erreur, l'admin n'a pas pu être supprimé</p>";
        header("refresh:1; url=addAdmin.php");
      }
    }


    else {?>

      <h2>Bienvenue sur la page d'administration des admins</h2>
      <h2>Vous êtes connecté <?php echo $_SESSION["login"]; ?></h2>

      <h3>Ajouter un admin</h3>
      <form method="post">
        <p>Login du nouvel admin</p><input type="text" name="login" required>
        <p>Mot de passe du nouvel admin</p><input type="password" name="mdp" required><br>
        <br>
        <input type="submit" name="submit" value="Valider">
    </form>
      <br>
      <br>
      <h3>Supprimer un admin</h3>
      <form method="post">
        <p>Login</p>
        <select name="delete">
        <?php
        $req = "SELECT login FROM ADMIN";
        $reponse = $dbh->query($req);
          while($ligne = $reponse->fetch()) { ?>
            <option value="<?php echo $ligne[0];?>"><?php echo $ligne[0]; ?></option>
          <?php }
          echo "blabla"?>
        </select>

        <br><br>
        <input type="submit" name="submitDelete" value="Valider">
      </form>
      </div>
<?php  }} ?>




</body>

</html>
