<?php 

namespace src;

class Magicien extends Personnage{
    public function sort(Personnage $joueur)
    {
        if ($joueur->estVivant()) {
            $vie = $joueur->getVie() - 5;
            $joueur->setVie($vie);
        } else {
            $joueur->setVie(0);
        }
    }

}