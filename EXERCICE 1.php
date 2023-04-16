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

$personne1 = new Personne("DIALLO", "Rougaiyatou", 20 );
$personne2 = new Personne("BAH", "Badrou", 18 );

echo "Personne 1: " . $personne1->nom . " " . $personne1->prenom . ", " . $personne1->age . " ans." ;
echo "Personne 2: " . $personne2->nom . " " . $personne2->prenom . ", " . $personne2->age . " ans." ;


?>