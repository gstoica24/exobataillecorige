<?php

use src\Guerrier;
use src\Magicien;

require 'vendor/autoload.php';

$magicien1 = new Magicien;
$magicien1->setNom('Magicien 1');
$magicien1->setArme('Arme magicien 1');

$magicien2 = new Magicien;
$magicien2->setNom('Magicien 2');
$magicien2->setArme('Arme magicien 2');

$magicien3 = new Magicien;
$magicien3->setNom('Magicien 3');
$magicien3->setArme('Arme magicien 3');

$guerrier1 = new Guerrier;
$guerrier1->setNom('Guerrier 1');
$guerrier1->setArme('Arme guerrier 1');

$combattants = [$magicien1, $magicien2, $magicien3, $guerrier1];

if (count($combattants) > 1) {
    $nbTentative = 0;
    do {
        $combattant1 =  $combattants[(array_rand($combattants))];
        $combattant2 =  $combattants[(array_rand($combattants))];

        if ($combattant1 === $combattant2) {
            echo "J'ai failli me frapper!<br>";
        } else {
            $combattant1->attack($combattant2);
            $combattant2->info();
        }

        $nbTentative++;

    } while ($combattant2->estVivant() && $nbTentative <= 20);

    echo "================================";
    echo "Nombre de tentative: ".($nbTentative - 1). '<br>';
    
    foreach($combattants as $combattant){
        $combattant->info();
    }
   
} else {
    echo "Je peux pas me battre tout seul!<br>";
}
