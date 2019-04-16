<?php
	class Lapin extends Rongeur implements LapinInterface {
		private $_gNourriture;
		
		public function __construct($_gNourriture, $_moche, $_race) {
			
			$this->_gNourriture = $_gNourriture;
			
			parent::__construct($_moche, $_race);
			
		}
		
		public function manger() {
			echo 'Le lapin à mangé ' . $this->_gNourriture . 'g de nourriture';
		}
	}