<?php
class Personne {
    public $nom;
    public $prenom;
    public $age;
    
    public function __construct($nom, $prenom, $age) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }
}

class Employe extends Personne {
    public $salaire;
    
    public function __construct($nom, $prenom, $age, $salaire) {
        parent::__construct($nom, $prenom, $age);
        $this->salaire = $salaire;
    }
}

$employe1 = new Employe("SOW", "John", 25, 2500);
$employe2 = new Employe("SULLA", "Jane", 30, 3500);

echo "Employe 1: " . $employe1->nom . " " . $employe1->prenom . ", " . $employe1->age . " ans, " . $employe1->salaire . " euros. <br>";
echo "Employe 2: " . $employe2->nom . " " . $employe2->prenom . ", " . $employe2->age . " ans, " . $employe2->salaire . " euros. <br>";
?>
