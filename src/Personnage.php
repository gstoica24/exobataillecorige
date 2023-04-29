<?php

namespace src;

abstract class Personnage
{
    protected $nom;
    protected $arme;
    protected $vie = 100;

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getArme()
    {
        return $this->arme;
    }

    public function setArme($arme)
    {
        $this->arme = $arme;
    }

    public function getVie()
    {
        return $this->vie;
    }

    public function setVie($vie)
    {
        $this->vie = $vie;
    }

    public function attack(Personnage $joueur)
    {
        if ($joueur->estVivant()) {
            $vie = $joueur->getVie() - 20;
            $joueur->setVie($vie);
        } else {
            $joueur->setVie(0);
        }
    }

    public function estVivant()
    {
        return $this->vie > 0;
    }

    public function info()
    {
        if($this->estVivant()){
            echo "Je suis $this->nom, je suis en vie et j'ai $this->vie point de vie<br>";
        }else{
            echo "Je suis $this->nom et je suis mort, me frappe plus!<br>";
        }
    }
}
