<?php
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Demande de prestation</title>
  <link rel="stylesheet" href="./style/client.css">
</head>

<body>

<header>
<img src="./style/logoShareLozere.png" alt="logo">
</header>

<form class="" action="client.php" method="post">

<div class="conteneur">
<div class="identite">
  <ul>
  <li>Nom :<input type="name" class="form-control" id="name" name="name"></li>
  <li>Téléphone :<input type="tel" class="form-control" id="tel" name="tel"></li>
  <li>Mail :<input type="mail" class="form-control" id="mail" name="mail"></li>
</ul>
</div>

  <div class="choix">
  <h1>Vous cherchez un professionnel:</h1>
  <ul>
    <li><input type="checkbox" name="checkbox[]" value="photo">pour faire des photos</li>
    <li><input type="checkbox" name="checkbox[]" value="ecommerce">en e-commerce</li>
    <li><input type="checkbox" name="checkbox[]" value="marketing">en marketing</li>
    <li><input type="checkbox" name="checkbox[]" value="referencement">du référencement</li>
    <li><input type="checkbox" name="checkbox[]" value="formation">pour vous dispenser une formation</li>
    <li><input type="checkbox" name="checkbox[]" value="conseil">pour vous conseiller</li>
    <li><input type="checkbox" name="checkbox[]" value="design">pour le design de votre site internet</li>
    <li><input type="checkbox" name="checkbox[]" value="site">pour créer un site internet</li>
    <li><input type="checkbox" name="checkbox[]" value="mobile">pour créer une appli mobile</li>
  </ul>
  <input type="submit" name="" value="Valider" id="button">
</form>
</div>
</div>

<footer>
  <p>Vous êtes connecté en tant que <span><strong>Véro Fleurs</strong></span></p>

</footer>

<?php
include ("connexion.php");
require 'functions.php';

$mysql->set_charset("utf8");
// on teste si les variables du formulaire sont bien déclarées
if (isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['tel'])) {
    $sql = 'INSERT INTO client (name, tel,  mail)
    VALUES  ("'.$_POST['name'].'", "'.$_POST['tel'].'", "'.$_POST['mail'].'")';
    $mysql->query($sql);

    $checkbox = $_POST['checkbox'];
    foreach ($checkbox as $valeur) {
// todo sql injection:
        $sql = "UPDATE client SET $valeur=1 WHERE mail='".$_POST['mail']."'";
        $mysql->query($sql);
    }
    $mysql->close();

// ouverture d'une nouvelle page
    echo "<script type='text/javascript'>document.location.replace('resultat.php');</script>";
} else {
  // echo 'Les variables du formulaire ne sont pas déclarées';
}
    ?>

</body>

</html>
