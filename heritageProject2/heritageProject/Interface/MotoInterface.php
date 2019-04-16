<?php
interface MotoInterface extends VehiculeInterface {
    public function __construct($marque, $model, $prix, $topCase);
    public function getTopCase();
}
?>