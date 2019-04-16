<?php
	// Nouvel objet utilisant des interfaces
	class Chat implements ChatInterface, AnimalInterface {
		
		// Attributs
		private $dest;
		
		// Fonction défini dans l'interface Chat
		public function move($dest) {
			echo 'je pars vers ' . $dest;
		}
		
		// Fonction défini dans l'interface Animal
		public function sleep() {
			echo 'je vais dormir !';
		}
		
	}