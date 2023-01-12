<?php
  //connexion a la base de données
  $pdo= new PDO('mysql:dbname=hanifi;host=localhost','root','root');

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if (isset($_POST['button'])) 


    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];

    $reponse = $bdd->prepare('SELECT FROM user WHERE nom = nom'); 
    $reponse->execute('nom' => $_POST'nom');
    $count = $query->rowCount(); 
    if($count == 1){
      $req = "DELETE FROM user VALUES(nom,prenom,age)";
    }
    else{
      echo 'User not found';
    };


 ?>

  <body>

<div class="form">
    <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
    <h2>Supprimer un utilisateur</h2>
    <p class="erreur_message">
    </p>
    <form action="supprimer.php" method="POST">
        <label>Nom</label>
        <input type="text" name="nom">
        <label>Prénom</label>
        <input type="text" name="prenom">
        <label>âge</label>
        <input type="number" name="age">
        <input type="submit" value="Supprimer" name="button">
    </form>
</div>
</body>