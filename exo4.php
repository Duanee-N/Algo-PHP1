<h1>Exercice 3</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php

$phrase="Engage le jeu que je le gagne";
$min=strtolower($phrase);
$phrase2=str_replace(" ", "", $min);
$invPhrase2=strrev($phrase2);
if($phrase2==$invPhrase2){
    echo "La phrase « $phrase » est un palindrome.";
}
else{
    echo "La phrase « $phrase » n'est pas un palindrome.";
}

?>