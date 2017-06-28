<?php

$user = 'root';
$pass = 'root';

$tab = [];

// client besoin en photo
try {
	$bdd = new PDO('mysql:host=localhost;dbname=ShareLozere',$user,$pass);
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo '<strong>'."Liste prestataires:".'</strong><br>';
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.photo=1 AND prestataire.photo=1') as $row) {
		$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.photo=1 AND prestataire.design=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($tab as $key => $value) {
		echo('Nom: '.$tab[$key]['nom'].'<br>');
		echo('Tel: '.$tab[$key]['tel'].'<br>');
		echo('mail: '.$tab[$key]['mail'].'<br>');
		echo'<br>';
	}
	$tab = [];
	$bdd = null;
}
catch(PDOException$e) {
	print "Erreur!:".$e->getMessage().'<br>';
	die();
}

// client besoin en ecommerce
try {
	$bdd = new PDO('mysql:host=localhost;dbname=ShareLozere',$user,$pass);
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo '<strong>'."Liste prestataires:".'</strong><br>';
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.ecommerce=1 AND prestataire.magento=1') as $row) {
		$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.ecommerce=1 AND prestataire.marketing=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.ecommerce=1 AND prestataire.wordpress=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.ecommerce=1 AND prestataire.php=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($tab as $key => $value) {
		echo('Nom: '.$tab[$key]['nom'].'<br>');
		echo('Tel: '.$tab[$key]['tel'].'<br>');
		echo('mail: '.$tab[$key]['mail'].'<br>');
		echo'<br>';
	}
	$tab = [];
	$bdd = null;
}
catch(PDOException$e) {
	print "Erreur!:".$e->getMessage().'<br>';
	die();
}


// client besoin en marketing
		try {
	$bdd = new PDO('mysql:host=localhost;dbname=ShareLozere',$user,$pass);
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo '<strong>'."Liste prestataires:".'</strong><br>';
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.marketing=1 AND prestataire.marketing=1') as $row) {
		$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.marketing=1 AND prestataire.conseil=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($tab as $key => $value) {
		echo('Nom: '.$tab[$key]['nom'].'<br>');
		echo('Tel: '.$tab[$key]['tel'].'<br>');
		echo('mail: '.$tab[$key]['mail'].'<br>');
		echo'<br>';
	}
	$tab = [];
	$bdd = null;
}
catch(PDOException$e) {
	print "Erreur!:".$e->getMessage().'<br>';
	die();
}


// client besoin en referencement
		try {
	$bdd = new PDO('mysql:host=localhost;dbname=ShareLozere',$user,$pass);
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo '<strong>'."Liste prestataires:".'</strong><br>';
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.referencement=1 AND prestataire.referencement=1') as $row) {
		$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.referencement=1 AND prestataire.conseil=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($tab as $key => $value) {
		echo('Nom: '.$tab[$key]['nom'].'<br>');
		echo('Tel: '.$tab[$key]['tel'].'<br>');
		echo('mail: '.$tab[$key]['mail'].'<br>');
		echo'<br>';
	}
	$tab = [];
	$bdd = null;
}
catch(PDOException$e) {
	print "Erreur!:".$e->getMessage().'<br>';
	die();
}


// client besoin en formation
		try {
	$bdd = new PDO('mysql:host=localhost;dbname=ShareLozere',$user,$pass);
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo '<strong>'."Liste prestataires:".'</strong><br>';
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.formation=1 AND prestataire.formation=1') as $row) {
		$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.formation=1 AND prestataire.html=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.formation=1 AND prestataire.css=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.formation=1 AND prestataire.javascript=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.formation=1 AND prestataire.php=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($tab as $key => $value) {
		echo('Nom: '.$tab[$key]['nom'].'<br>');
		echo('Tel: '.$tab[$key]['tel'].'<br>');
		echo('mail: '.$tab[$key]['mail'].'<br>');
		echo'<br>';
	}
	$tab = [];
	$bdd = null;
}
catch(PDOException$e) {
	print "Erreur!:".$e->getMessage().'<br>';
	die();
}


// client besoin en conseil
		try {
	$bdd = new PDO('mysql:host=localhost;dbname=ShareLozere',$user,$pass);
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo '<strong>'."Liste prestataires:".'</strong><br>';
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.conseil=1 AND prestataire.conseil=1') as $row) {
		$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.conseil=1 AND prestataire.formation=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($tab as $key => $value) {
		echo('Nom: '.$tab[$key]['nom'].'<br>');
		echo('Tel: '.$tab[$key]['tel'].'<br>');
		echo('mail: '.$tab[$key]['mail'].'<br>');
		echo'<br>';
	}
	$tab = [];
	$bdd = null;
}
catch(PDOException$e) {
	print "Erreur!:".$e->getMessage().'<br>';
	die();
}


// client besoin en design
		try {
	$bdd = new PDO('mysql:host=localhost;dbname=ShareLozere',$user,$pass);
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo '<strong>'."Liste prestataires:".'</strong><br>';
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.design=1 AND prestataire.design=1') as $row) {
		$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.design=1 AND prestataire.html=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.design=1 AND prestataire.css=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($tab as $key => $value) {
		echo('Nom: '.$tab[$key]['nom'].'<br>');
		echo('Tel: '.$tab[$key]['tel'].'<br>');
		echo('mail: '.$tab[$key]['mail'].'<br>');
		echo'<br>';
	}
	$tab = [];
	$bdd = null;
}
catch(PDOException$e) {
	print "Erreur!:".$e->getMessage().'<br>';
	die();
}


// client besoin en site
		try {
	$bdd = new PDO('mysql:host=localhost;dbname=ShareLozere',$user,$pass);
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo '<strong>'."Liste prestataires:".'</strong><br>';
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.site=1 AND prestataire.html=1') as $row) {
		$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.site=1 AND prestataire.css=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.site=1 AND prestataire.php=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.site=1 AND prestataire.javascript=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.site=1 AND prestataire.python=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.site=1 AND prestataire.wordpress=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($tab as $key => $value) {
		echo('Nom: '.$tab[$key]['nom'].'<br>');
		echo('Tel: '.$tab[$key]['tel'].'<br>');
		echo('mail: '.$tab[$key]['mail'].'<br>');
		echo'<br>';
	}
	$tab = [];
	$bdd = null;
}
catch(PDOException$e) {
	print "Erreur!:".$e->getMessage().'<br>';
	die();
}


// client besoin en mobile
		try {
	$bdd = new PDO('mysql:host=localhost;dbname=ShareLozere',$user,$pass);
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo '<strong>'."Liste prestataires:".'</strong><br>';
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.mobile=1 AND prestataire.html=1') as $row) {
		$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.mobile=1 AND prestataire.css=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.mobile=1 AND prestataire.php=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.mobile=1 AND prestataire.javascript=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.mobile=1 AND prestataire.python=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($bdd->query('SELECT * FROM client JOIN prestataire WHERE client.mobile=1 AND prestataire.wordpress=1') as $row) {
		if (!array_key_exists($row['id'], $tab)) {
			$tab[$row['id']] = array('nom' => $row['name'], 'tel' => $row['tel'], 'mail' => $row['mail']);
		}
	}
	foreach($tab as $key => $value) {
		echo('Nom: '.$tab[$key]['nom'].'<br>');
		echo('Tel: '.$tab[$key]['tel'].'<br>');
		echo('mail: '.$tab[$key]['mail'].'<br>');
		echo'<br>';
	}
	$tab = [];
	$bdd = null;
}
catch(PDOException$e) {
	print "Erreur!:".$e->getMessage().'<br>';
	die();
}

?>