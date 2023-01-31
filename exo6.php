<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d'articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex: 20 % -> 0.2)</p>

<h2>Résultat</h2>

<?php

$prixHT = rand(1, 1000);
$nbArticles = rand(1, 100);
$TVA = 0.2 ;
$TTC = $prixHT + $prixHT * $TVA;
$prixTotal= $TTC * $nbArticles;
echo "Prix unitaire de l'article : $prixHT € <br>";
echo "Quantité : $nbArticles <br>";
echo "Taux de TVA : $TVA <br>";
echo "Le montant de la facture à régler est de : $prixTotal €"

?>






$tableau=array("F","H");


for($i = 0; $i < count($tableau); $i++){
    echo $tableau[$i]."<br>";
}