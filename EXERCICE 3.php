<?php
class Personne {
    private $nom;
    private $prenom;
    private $age;
    
    public function __construct($nom, $prenom, $age) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }
    
    public function getNom() {
        return $this->nom;
    }
    
    public function setNom($nom) {
        $this->nom = $nom;
    }
    
    public function getPrenom() {
        return $this->prenom;
    }
    
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }
    
    public function getAge() {
        return $this->age;
    }
    
    public function setAge($age) {
        $this->age = $age;
    }
    
    public function getNomComplet() {
        return $this->nom . " " . $this->prenom;
    }
}

class Employe extends Personne {
    private $salaire;
    
    public function __construct($nom, $prenom, $age, $salaire) {
        parent::__construct($nom, $prenom, $age);
        $this->salaire = $salaire;
    }
    
    public function getSalaire() {
        return $this->salaire;
    }
    
    public function setSalaire($salaire) {
        $this->salaire = $salaire;
    }
}

$employe1 = new Employe("Doe", "John", 25, 2500);
$employe2 = new Employe("Smith", "Jane", 30, 3500);

$employe1->setNom("Dupont");
$employe2->setAge(35);

echo "Employe 1: " . $employe1->getNomComplet() . ", " . $employe1->getAge() . " ans, " . $employe1->getSalaire() . " euros. <br>";
echo "Employe 2: " . $employe2->getNomComplet() . ", " . $employe2->getAge() . " ans, " . $employe2->getSalaire() . " euros. <br>";
?>
