<?php 
	 class Rongeur implements RongeurInterface {
		private $_moche;
		public $_race;
		
		public function __construct($_moche, $_race) {
			$this->_nbDents = 2;
			$this->_moche = $_moche;
			$this->_race = $_race;
			$this->_race = $_race;
			
			try {	
				var_dump($this);
			
				new RongeurException($this);
			} catch(Exception $e) {
				var_dump($e->getMessage());
			}
		}
		
		public function getNbDents() {
			return $this->_nbDents;
		}
		
		public function getMoche() {
			return $this->_moche;
		}
		 
		public function getRace() {
			return $this->_race;
		}
	}