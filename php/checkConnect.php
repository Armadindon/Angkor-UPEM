<?php include("connexion.inc.php");
//Vérifie que l'admin est connecté

if(!(isset($_SESSION["login"])){
  header("location: ../index.php");
} ?>
