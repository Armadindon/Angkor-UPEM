<?php include("connexion.inc.php");
if(!(isset($_SESSION["login"])){
  header("location: ../index.php");
} ?>
