<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js">
        </script>
    </head>
    <body>
      <h1>Liste des prestataires </h1>

      <?php
      include ("connexion.php");
      $reponse = $bdd->query("SELECT * FROM prestataire");
      $donnees = $reponse->fetchALL();
      foreach ($donnees as $reponse) {
        ?>
          <p> <strong> Nom : </strong> <?php echo $reponse->name; ?>  </p>
          <p> <strong> Téléphone : </strong> <?php echo $reponse->tel; ?> </p>
          <p> <strong> Mail : </strong> <?php echo $reponse->mail; ?> </p>

        <?php
      }
        ?>
    </body>
</html>
