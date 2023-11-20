<?php
$p1 = new Personne("DUPONT","Michel", "M", "1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice","F","1985-01-17");

// echo $p1->getNom();
echo $p2->getNom();
// echo $p1->getPrenom();
$p2->setNom("SCHMITT");

echo $p2->getNom();


class Personne {

    // attributs
    private string $_prenom;
    private string $_nom;
    private string $_sexe;
    private DateTime $_dateNaissance;

    // constructeur
    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance) {
        $this->_nom = $nom;
        $this->_prenom=$prenom;
        $this->_sexe=$sexe;
        $this->_dateNaissance = new DateTime($dateNaissance);
    }

    // accesseurs (getters) et mutateurs (setters)
    public function getNom(){
        return $this->_nom;
    }

    public function setNom(string $nom){
        $this->_nom = $nom;
    }

    public function getSexe() : string {
        return $this->_sexe;
    }

    public function setSexe(string $sexe){
        $this->_sexe = $sexe;
    }

    public function getPrenom() : string{
        return $this->_prenom;
    }

    public function setPrenom(string $prenom){
        $this->_prenom = $prenom;
    }

    public function getDateNaissance() {
        return $this->_dateNaissance;
    }

    public function setDateNaissance(string $dateNaissance){
        $this->_dateNaissance = $dateNaissance;
    }
}
