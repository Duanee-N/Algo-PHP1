<h1>Exercice 12</h1>

<p>A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langue associée (tableau  contenant  clé  et  valeur),  dire  bonjour  aux  différentes  personnes  dans  leur  langue respective.</p>

<h2>Résultat</h2>

<?php

$prenoms=array("Marie"=>"Salut", "Pablo"=>"Hola", "Diana"=>"Hello");

function msg($prenoms){
    foreach ($prenoms as $prenom=>$message){
        echo "$message $prenom <br>";  
}
}

msg($prenoms);

?>
