<?php
class Moto extends Vehicule {

    private $topCase;

    public function __construct($marque, $model, $prix, $topCase)
    {
        parent::__construct($marque, $model, $prix);
        $this->topCase = $topCase;
    }

    /**
     * @return mixed
     */
    public function getTopCase()
    {
        return $this->topCase;
    }

    /**
     * @param mixed $topCase
     */
    public function setTopCase($topCase)
    {
        $this->topCase = $topCase;
    }

    /**
     * @return mixed
     */
    public function getNbPlaces()
    {
        return $this->nbPlaces;
    }

    /**
     * @param mixed $nbPlaces
     */
    public function setNbPlaces($nbPlaces)
    {
        $this->nbPlaces = $nbPlaces;
    }
    private $nbPlaces;



}
?>