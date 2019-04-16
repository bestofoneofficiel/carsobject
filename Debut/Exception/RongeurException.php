<?php
class RongeurException extends Exception {
	protected $allowedRodent = ['Lapin', 'Marmotte'];
	
	public function __construct(Rongeur $rodent) {

		if(!in_array($rodent->getRace(), $this->allowedRodent)) {

			throw new Exception('Ce rongeur n\'est pas autorisé', 404);
			
		}
		
	}
	
}