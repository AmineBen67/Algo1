<?php
class Voiture{
    private string $_marque;
    private string $_modele;

    public function __construct(string $marque, string $modele){
        $this->_marque = $marque;
        $this->_modele = $modele;
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
    public function getInfos(){
        return "Nom et modèle du véhicule :$this->_marque $this->_modele";
    }
}
class VoitureElec extends Voiture{
    private int $_autonomie;

    public function __construct(string $marque, string $modele, int $autonomie){
        parent::__construct($marque, $modele);
        $this->_autonomie = $autonomie;
    }
    public function getInfos(){
        return parent::getInfos()." / Autonomie : ".$this->_autonomie." km";
    }
}
$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);

echo $v1->getInfos()."<br>";
echo $ve1->getInfos()."<br>";