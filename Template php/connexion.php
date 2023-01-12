<?php
  //connexion à la base de données
  $pdo= new PDO('mysql:dbname=hanifi;host=localhost','root','root');

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>