<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>

<body>
	<?php 
	// INCLUSION
		include('./include/include.php'); 

/*	
	// SANS CONSTRCTEUR
		// Creer l'objet
		$animalSC = new AnimalSansConstruct;

		// setter
		$animalSC->setPoids(40);
		$animalSC->setTaille(120);

		// Afficher l'animal sans constructeur
		var_dump($animalSC);
	
		$animalSC->afficheMonPoids();
	
	// AVEC CONSTRUCTEUR
		// Creer l'objet et definir le poids
		$animalAC = new AnimalAvecConstruct(40, 120);

		// Afficher l'animal avec constrcteur
		var_dump($animalAC);
	
	
	// STATIQUE
		// Afficher l'animal statique
		echo 'AnimalStatic : ' . AnimalStatic::$_poids . '<br/>';
		echo 'AnimalStatic : ' . AnimalStatic::getPoids();
	
	
	// HERITAGE
		// créer un objet enfant
		$chien = new Chien(40, 120, 'golden');
	
		// afficher l'objet enfant
		var_dump($chien);
	
		// Affichier la fonction du parent depuis l'enfant
		echo 'poids du iench : '; $chien->donneMoiLePoids(); echo '<br/>';
	
	// CLASSE ABSTRAITES
		// Animal ne peut pas être instancier car il est abstrait
		// $animalAbstrait = new Animal(10, 110);

		// 
		$chien1 = new Chien(5, 60, 'cocker');
		var_dump($chien1);
	
*/	
		// 
		$lapin1 = new Lapin(34, 'vrai', 'Lapin');
		$lapin1->manger();
		var_dump($lapin1);
		$rodent = new Lapin(45, 'Faux', 'vache');
		var_dump($rodent);
	
		
	?>
</body>
</html>