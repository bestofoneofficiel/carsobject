<?php
    include 'class/Vehicule.php';
    include 'class/Voiture.php';
    include 'class/Moto.php';
    include 'class/Audi.php';

    $audiRS1 = new Audi('Audi', 'RS1', 100000, 5, 1, 1, 0);
    $voitureInconnu = new Voiture('Renault', 'Espace', 10000, 5, 0, 0);
    $vehiculeInconnu = new Vehicule('Renault', 'Tracteur', 100000);
    $moto = new Moto('Kawasaki', 'Z900', 8000, 1);

    var_dump($audiRS1);
    var_dump($voitureInconnu);
    var_dump($vehiculeInconnu);
    var_dump($moto);

?>