<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance). Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.</p>

<h2>Résultat</h2>

<?php


class Personne
{
    public $_nom;
    public $_prenom;
    public $_dateNaissance;
 
    

    public function __construct($_nom, $_prenom, $_dateNaissance)
    {
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_dateNaissance = new DateTime($_dateNaissance);
  
    } 

    public function calcAge(){
        $now = new DateTime();
        return $now->diff($this->_dateNaissance)-> y;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function getDateNaissance(){
        return $this->_dateNaissance;
    }
}

$p1= new Personne("DUPONT", "Michel", "1980-02-19");
echo $p1->getPrenom()." ";
echo $p1->getNom()." ";
echo "a ".$p1->calcAge()." ans.". "<br>";

$p2= new Personne("DUCHEMIN", "Alice", "1985-01-17");
echo $p2->getPrenom()." ";
echo $p2->getNom()." ";
echo "a ".$p2->calcAge()." ans.". "<br>";




// class Ordinateur
// {
//     private $_marque;
//     private $_modele;
//     public function __construct($marque, $modele)
//     {
//         $this->_marque = $marque;
//         $this->_modele = $modele;
//     }

//     public function getMarque()
//     {
//         return $this->_marque;
//     }
//     public function getModele()
//     {
//         return $this->_modele;
//     }
// }
// $poste = new Ordinateur("Samsung", "AGP 5000"); //crééra un objet Ordinateur de marque Samsung
// // echo $poste->getMarque();
// echo $poste->getModele();
