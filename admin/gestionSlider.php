<?php include("../php/connexion.inc.php");
if(!isset($_SESSION["login"])){
  header("location: ../index.php");
} 
?>
<?php if (isset($_POST["num"])) {
  $dbh->query("DELETE FROM Slider WHERE numSlide=".$_POST["num"].";");
}
if(isset($_FILES['image']) && isset($_POST["img"]) && $_POST['img']==1){
  $file_name = $_FILES['image']['name'];
  $file_size =$_FILES['image']['size'];
  $file_tmp =$_FILES['image']['tmp_name'];
  $file_type=$_FILES['image']['type'];
  $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

  $extensions= array("jpeg","jpg","png");

  if(in_array($file_ext,$extensions)=== false){
    $erreur=0;
  }

  if($file_size > 2097152){
    $erreur=1;
  }
  if(!isset($erreur)){
    move_uploaded_file($file_tmp,"../imageSlider/".$file_name);
    $dbh->query("INSERT INTO Slider(image, linkImage) VALUES (1,\"imageSlider/".utf8_encode($file_name)."\");");
  }

}

if(isset($_POST["contenu"]) &&  isset($_POST["img"]) && $_POST['img']==0){
  $dbh->query("INSERT INTO `Slider`(`contenuSlide`) VALUES (\"".$_POST["contenu"]."\");");
}
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
  <link rel="stylesheet" href="../CSS/styles.css">
  <link rel="stylesheet" href="../CSS/gestionComm.css">

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
  <div class="Contenu"> <!-- Contenu de la page a partir de la -->

    <?php if(isset($erreur)){
      switch ($erreur) {
        case 0:
        echo "<b>Ce n'est pas une image valable : extension non acceptée</b>";
        break;

        case 1:
        echo "<b>Ce n'est pas une image valable : l'image est trop grosse (Max 2Mo)</b>";
        break;
      }
    } ?>

    <h1>Bienvenue sur L'administration du slider</h1>
    <h2>Slides actives :</h2>

    <table>
      <tr>
        <th>numéro slide</th>
        <th>contenu slide</th>
        <th>image</th>
        <th>lien image</th>
        <th></th>
      </tr>
      <?php
      $req = $dbh->query("SELECT * FROM Slider;");
      while ($ligne = $req->fetch()) {
        ?>
        <tr>
          <td><?php echo $ligne[0]; ?></td>
          <td><?php echo ($ligne[1]==null)?"Contenu Vide":$ligne[1]; ?></td>
          <td><?php echo ($ligne[2]==null)?"non":"oui"; ?></td>
          <td><?php if($ligne[3]!=null){ ?> <a href="<?php echo "../".utf8_encode($ligne[3]); ?>"> image</a><?php }else {
            ?>Pas D'image<?php
          } ?> </td>
          <td> <form method="post"> <input type="hidden" name="num" value="<?php echo $ligne[0]; ?>"> <button type="submit" >supprimer</button> </form> </td>
        </tr>
        <?php
      }
      ?>
    </table>

    <h2>Ajouter une slide</h2>
    <form method="post" enctype="multipart/form-data">
      <h3>La nouvelle slide est elle une image ?</h3>
      <input type="radio" name="img" value="0" <?php if (isset($_POST["img"]) && $_POST["img"]==0){echo "checked";}?>> Non <br>
      <input type="radio" name="img" value="1" <?php if (isset($_POST["img"]) && $_POST["img"]==1){echo "checked";}?>> Oui <br>
      <?php
      if(isset($_POST["img"])){

        if($_POST["img"]==1){
          ?>
          <h2>Merci d'envoyer votre image</h2>
          <input type="file" name="image"><br>

          <?php
        }else {
          ?>
          <h2>Rentrez le contenu de la slide (en code html si vous le souhaitez)</h2>
          <h3>Attention ! Le code de doit pas contenir des doubles-quotes , utilisez des simples quotes !</h3>
          <textarea name="contenu" rows="8" cols="80"></textarea><br>
          <?php
        } ?>

      <?php } ?>
      <button type="submit" name="button">Envoyer</button>
    </form>

  </div>



</body>
</html>
