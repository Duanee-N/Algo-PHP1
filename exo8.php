<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre. Remarque: proposer 2 solutions avec 2 types de boucles.</p>

<h2>Résultat</h2>

<?php

//Boucle while
 $nb=rand(1, 1000);
 $nb2=0;
 while($nb2<10){
     $nb2++;
     echo $nb." x ".$nb2." = ".$nb*$nb2."<br>";
}

//Boucle for
// $nb=rand(1, 1000);
// for($i = 0; $i <=10; $i++){
//     echo $nb." x ".$i." = ".$nb*$i."<br>";
// }

?>