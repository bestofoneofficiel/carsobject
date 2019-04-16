<?php
	// Nouvel objet utilisant une classe parente
	class Chien extends AnimalAvecConstruct {
		
		// Attributs de l'enfant
		private $_race;
		
		// Constructeur enfant 
		public function __construct($_poids, $_taille, $_race) {
			
			// Utilisation du constructeur parent
			parent::__construct($_poids, $_taille);
			
			// Nouveau setter
			$this->_race = $_race;
			
		}
		
		// Nouvelle fonction fille
		public function getRace() {
			echo $this->$_race;
		}
		
		// Fonction du parent
		public function donneMoiLePoids() {
			parent::getPoids();
		}
		
	}