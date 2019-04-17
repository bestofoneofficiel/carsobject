<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>titre test</title>
</head>

<body>
	<?php 
	// INCLUSION
		include('./include/include.php'); 
	
	
	echo '<h2>SANS CONSTRUCTEUR</h2>';
	// SANS CONSTRUCTEUR
		// Creer l'objet
		$animalSC = new AnimalSansConstruct;

		// setter
		$animalSC->setPoids(40);
		$animalSC->setTaille(120);

		// Afficher l'animal sans constructeur
		var_dump($animalSC);
	
		$animalSC->afficheMonPoids();
	
	
	echo '<h2>AVEC CONSTRUCTEUR</h2>';
	// AVEC CONSTRUCTEUR
		// Creer l'objet et definir le poids
		$animalAC = new AnimalAvecConstruct(40, 120);

		// Afficher l'animal avec constrcteur
		var_dump($animalAC);
	
	
	echo '<h2>STATIQUE</h2>';
	// STATIQUE
		// Afficher l'animal statique
		echo 'AnimalStatic : ' . AnimalStatic::$_poids . '<br/>';
		echo 'AnimalStatic : ' . AnimalStatic::getPoids();
	
	
	echo '<h2>HERITAGE</h2>';
	// HERITAGE
		// créer un objet enfant
		$chien = new Chien(40, 120, 'golden');
	
		// afficher l'objet enfant
		var_dump($chien);
	
		// Affichier la fonction du parent depuis l'enfant
		echo 'poids du iench : '; $chien->donneMoiLePoids(); echo '<br/>';
	
	
	echo '<h2>CLASSES ABSTRAITES</h2>';
	// CLASSES ABSTRAITES
		// Animal ne peut pas être instancier car il est abstrait
		// $animalAbstrait = new Animal(10, 110);


		$chien1 = new Chien(5, 60, 'cocker');
		var_dump($chien1);
	

	echo '<h2>EXCEPTIONS</h2>';
	// EXCEPTIONS
		$lapin1 = new Lapin(34, 'vrai', 'Lapin');
		$lapin1->manger();
		var_dump($lapin1);
		
		$rodent = new Lapin(45, 'Faux', 'vache');
		
	
	echo '<h2>Méthodes magiques</h2>';
	// __set()
		// Attribut public
		$chien1->sale = 'oui';
	
		// Atrribut privé
		$chien1->_race = 90;
	
		// Attribut innexistant
		$chien1->age = 12;
	
	// __get()
		// Attribut public
		$chien1->_race;
		
	echo '<br /><br /><br /><br /><br />';
	?>
</body>
</html>