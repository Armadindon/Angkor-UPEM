<?php
// Destruction de session lors de déconnexion
session_start();
 session_unset();

 session_destroy();

 header('location: ../index.php');
 ?>
