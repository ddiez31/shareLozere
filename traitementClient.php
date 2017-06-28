<?php
// try
// {
//
//     $bdd = new PDO('mysql:host=localhost;dbname=ShareLozere;charset=utf8', 'root', '33forza');
//     $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }
// catch (Exception $e)
// {
//   die('Erreur : ' . $e->getMessage());
// }


include ("connexion.php");
$mysql->set_charset("utf8");

// on teste si les variables du formulaire sont bien déclarées
if (isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['tel'])) {

  $sql = 'INSERT INTO client (name, tel,  mail)
    VALUES  ("'.$_POST['name'].'", "'.$_POST['tel'].'", "'.$_POST['mail'].'")';
    $mysql->query($sql);

    $checkbox = $_POST['checkbox'];
    foreach ($checkbox as $valeur){
// todo sql injection:
        $sql = "UPDATE client SET $valeur=1 WHERE mail='".$_POST['mail']."'";
        $mysql->query($sql);
    }
    $mysql->close();


}
else {
  echo 'Les variables du formulaire ne sont pas déclarées';
}
?>

// try
// {
//   $req = $bdd->prepare('INSERT INTO client (photo, ecommerce, marketing, referencement, formation, conseil, design, site, mobile) VALUES(:photo, :ecommerce, :marketing, :referencement, :formation, :conseil, :desing, :site, :mobile)');
//   $req->execute(array(
//     'photo' => $_POST['photo'],
//     'ecommerce' => $_POST['true'],
//     'marketing' => $_POST['true'],
//     'referencement'=> $_POST['true'],
//     'formation'=> $_POST['true'],
//     'conseil'=> $_POST['true'],
//     'design'=> $_POST['true'],
//     'site'=> $_POST['true'],
//     'mobile'=> $_POST['true'],
//
//   ));
//
// echo "entré";
// }
// catch (Exception $e)
// {
//   echo "vous êtes inscrit";
//   //die('Erreur : ' . $e->getMessage());
// }
 ?>
