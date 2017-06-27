<?php

$user = 'root';
$pass = 'root';

try {
	$bdd = new PDO('mysql:host=localhost;dbname=ShareLozere',$user,$pass);
	echo '<strong>'."Liste prestataires:".'</strong><br>';
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.photo=1 AND prestataire.photo=1') as $row) {
		echo($row['name'].'<br>');
	}
	$bdd = null;
}
catch(PDOException$e) {
	print "Erreur!:".$e->getMessage().'<br>';
	die();
}




?>