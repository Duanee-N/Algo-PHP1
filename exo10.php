<h1>Exercice 10</h1>

<p>A partir d'un montant à payer et d'une somme versée pour régler un achat, écrire l'algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1€.</p>

<h2>Résultat</h2>

<?php

$prix=rand(10, 500);
$paye=$prix+rand(10,100);
$reste=$paye-$prix;
echo "Montant à payer : $prix € <br> Montant versé : $paye € <br> Montant à rendre : $reste € <br><br>";
echo "Rendu de monnaie : <br>";

$billets=array(50, 20, 10, 5);
$pieces=array(2, 1);

foreach($billets as $billet){
    $stock=intdiv($reste, $billet);
    $reste=$reste%$billet;
    echo $stock." billet(s) de $billet € <br>";
}

foreach($pieces as $piece){
    $stock1=intdiv($reste, $piece);
    $reste=$reste%$piece;
    echo $stock1." pièce(s) de $piece € <br>";
}

// $billet50=intdiv($reste, 50);
// echo $billet50." billet(s) de 50 € <br>";

// $reste=$reste%50;

// $billet20=intdiv($reste, 20);
// echo $billet20." billet(s) de 20 € <br>";

// $reste=$reste%20;

// $billet10=intdiv($reste, 10);
// echo $billet10." billet(s) de 10 € <br>";

// $reste=$reste%10;

// $billet5=intdiv($reste, 5);
// echo $billet5." billet de 5 € <br>";

// $reste=$reste%5;

// $piece2=intdiv($reste, 2);
// echo $piece2." pièce(s) de 2 € <br>";

// $reste=$reste%2;

// $piece1=intdiv($reste, 1);
// echo $piece1." pièce de 1 € <br>";

?>