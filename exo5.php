<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php

$francs=rand(100, 1000);
$euros=$francs/6.55957;
$arrondi=round($euros, 2);
echo "Montant en francs : $francs <br>";
echo " $francs francs = $arrondi €";

?>