<?php

class Voiture {
    private string $_marque;
    private string $_modele;
    private int $nbePortes;
    private bool $isDemaree;
    private float $vitesseActuelle;

    public function __construct(string $marque, string $modele, int $nbePortes){
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbePortes = $nbePortes;
        $this->isDemaree = true;
        $this->vitesseActuelle = 20;
    }
    public function getMarque(){
        return $this->_marque;
    }
    public function setMarque(string $marque){
        $this->_marque = $marque;
    }

    public function getModele(){
        return $this->_modele;
    }
    public function setModele(string $modele){
        $this->_modele = $modele;
    }    

    public function setNbePortes(){
        return $this->_nbePortes;
    }
    public function getNbePortes(int $nbePortes){
        $this->_nbePortes = $nbePortes;
    }
    


    public function demarrer(){
        $this->isDemaree = true;
    }

    public function accelerer(int $vitesse){
        if($this->isDemaree)
        {
                $this->vitesseActuelle = $this->vitesseActuelle + $vitesse;
                echo "le véhicule a bien accéléré de $vitesse km/h";
            } 
            else {
                echo "le véhicule n'a pas encore démarré";
            }
    
    }

    public function stopper(){
        $this->isDemaree = false;
    }

    public function ralentir(int $vitesse){
            $this->vitesseActuelle = $this->vitesseActuelle - $vitesse;
        if($this->vitesseActuelle<0)
        {
            echo "La vitesse du véhicule ne peut être négative";
        }
        else{
            echo "le véhicule a bien ralenti de $vitesse km/h";
        }       
        }
}

$v1 = new Voiture("Peugeot","408",5);
$v2 = new Voiture("Citroën","C4",3);
$v1->ralentir(10);
echo"<br>";
$v2->accelerer(50);