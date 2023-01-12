<?php include('./connexion.php'); 
if (isset($_POST['button'])) {


    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
  
  
    $req = "SELECT from user WHERE nom = nom AND prenom = prenom AND age = age)";
    $execute = $pdo->prepare($req);
    $stm = $execute->execute([$nom, $prenom, $age]);
    $count = $query->rowCount(); 
    if($count == 1){
      $req = "UPDATE FROM user VALUES(nom,prenom,age)";
    }
    else{
      echo 'User not found';
    };
    
    
    
  }?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Modifier un utilisateur</h2>
        <p class="erreur_message">
        </p>
        <form action="modifier.php" method="POST">
            <label>Nom</label>
            <input type="text" name="nom">
            <label>Prénom</label>
            <input type="text" name="prenom">
            <label>âge</label>
            <input type="number" name="age">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>

</html>