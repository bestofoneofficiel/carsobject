<?php
	// Animal sans constructeur
		class AnimalSansConstruct {
			
			// Definition des variables
			private $_poids;
			private $_taille;

			// setter function
			function setPoids(int $_poids) {
				$this->_poids = $_poids;
			}
			
			// setter function
			function setTaille(int $_taille) {
				$this->_taille = $_taille;
			}

			// getter function
			public function afficheMonPoids() {
				echo $this->_poids;
			}
			
			// getter function
			public function afficheMaTaille() {
				echo $this->_taille;
			}

		}

	// Animal avec constructeur
		class AnimalAvecConstruct {
			
			// Definition des variables
			private $_poids;
			private $_taille;
			private $dest;
		
			// Constructeur
			public function __construct(int $_poids, int $_taille) {
				$this->_poids = $_poids;
				$this->_taille = $_taille;
			}

			// Getter
			function getPoids() {
				echo $this->_poids;
			}
			
			public function sleep($dest) {
				echo 'je vais dormir !';
			}
			
			// Desctructeur
			public function __destruct() {
				echo 'AnimalAvecConstruct a bien été détruit<br/>';
			}
			
		}
	
	// Animal statique
		class AnimalStatic {
			
			// Definition des variables
			public static $_poids = 50;

			// Getter
			public static function getPoids() {
				return self::$_poids;
			}
			
		}

	// Animal abstrait
		abstract class AnimalAbstract {
			
			// Attributs
			private $_poids;
			private $_taille;
			
			// Constructeur
			public function __construct($_poids, $_taille) {
				$this->_poids = $_poids;
				$this->_taille = $_taille;
			}
			
			// Getter
			public function getPoids() {
				echo $this->_poids;
			}public function getTaille() {
				echo $this->_taille;
			}
			
		}
