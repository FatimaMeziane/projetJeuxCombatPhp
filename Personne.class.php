<?php
class Personne
{
    public $nom;
    public  $nbr_vie;
    public $degat;
    public $armure;
    
    public function getName()
    {
        return $this->nom;
    }
    public function setName($nom)
    {
        $this->nom = $nom;
    }

    public function getNbrVie()
    {
        return $this->nbr_vie;
    }
    public function setNbrVie($nbrVie)
    {
        $this->nbr_vie = $nbrVie;
    }

    public function getDegat()
    {
        return $this->degat;
    }
    public function setDegat($degat)
    {
        $this->degat = $degat;
    }
    public function setArmure($armure)
    {
        $this->armure = $armure;
    }
    public function getArmure()
    {
        return $this->armure;
    }


    public function vieSupp($nbrVieEnnemie)
    {
        if ($nbrVieEnnemie <= 0) {
            $this->nbr_vie += 50;
        }
    }

    public function attaque($degat)
    {
        $this->nbr_vie -= $degat;
    }

    public function bonusArmure($nbrVieEnnemie)
    {
        if ($nbrVieEnnemie <= 0) {
            $this->nbr_vie += 20;
        }
    }
}