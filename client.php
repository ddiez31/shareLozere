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


<div class="conteneur">

  <div class="choix">

  <h1>Vous cherchez un professionnel:</h1>
  <ul>
    <li><input type="checkbox" name="choix[]" value="photo">pour faire des photos</li>
    <li><input type="checkbox" name="choix[]" value="digital marketing">en e-commerce</li>
    <li><input type="checkbox" name="choix[]" value="marketing">en marketing</li>
    <li><input type="checkbox" name="choix[]" value="referencement">du référencement</li>
    <li><input type="checkbox" name="choix[]" value="formation">pour vous dispenser une formation</li>
    <li><input type="checkbox" name="choix[]" value="conseil">pour vous conseiller</li>
    <li><input type="checkbox" name="choix[]" value="design">pour le design de votre site internet</li>
    <li><input type="checkbox" name="choix[]" value="site">pour créer un site internet</li>
    <li><input type="checkbox" name="choix[]" value="referencement">pour créer une appli mobile</li>
  </ul>

  <!-- <form class="validation" action="index.html" method="post">
    <a href="#">Valider</a>

  </form> -->

  <form class="validation" action="traitementClient.php" method="post" onSubmit="return validation(this);" enctype="multipart/form-data" ><a href="traitementClient.php">Valider</a>
  </form>
</div>
</div>

<footer>
  <p>Vous êtes connecté en tant que <span><strong>Véro Fleurs</strong></span></p>

</footer>

</body>

</html>
