<?php
try
{

    $bdd = new PDO('mysql:host=localhost;dbname=ShareLozere;charset=utf8', 'root', '33forza');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}


try
{
  $req = $bdd->prepare('INSERT INTO client (photo, ecommerce, marketing, referencement, formation, conseil, design, site, mobile) VALUES(:true, :ecommerce, :marketing, :referencement, :formation, :conseil, :desing, :site, :mobile)');
  $req->execute(array(
    'photo' => $_POST['true'],
    'ecommerce' => $_POST['true'],
    'marketing' => $_POST['true'],
    'referencement'=> $_POST['true'],
    'formation'=> $_POST['true'],
    'conseil'=> $_POST['true'],
    'design'=> $_POST['true'],
    'site'=> $_POST['true'],
    'mobile'=> $_POST['true'],

  ));

echo "entré";
}
catch (Exception $e)
{
  echo "vous êtes inscrit";
  //die('Erreur : ' . $e->getMessage());
}
 ?>
