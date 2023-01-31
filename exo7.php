<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge:</p>
    <ul>
        <li>Poussin: entre 6 et 7 ans</li>
        <li>Pupille: entre 8 et 9 ans</li>
        <li>Minime: entre 10 et 11 ans</li>
        <li>Cadet: à partir de 12 ans</li>
        <li>Si la catégorie n'est pas gérée, merci de le préciser.</li>
    </ul>

<h2>Résultat</h2>

<?php

$age=8;
//  switch ($age){
//      case($age>=6 && $age<=7):
//          echo "L'enfant qui a $age ans appartient à la catégorie « Poussin »";
//      case($age>=8 && $age<=9):
//          echo "L'enfant qui a $age ans appartient à la catégorie « Pupille »";
//      case($age>=10 && $age<=11):
//         echo "L'enfant qui a $age ans appartient à la catégorie « Minime »";
//      case($age>=12):
//         echo "L'enfant qui a $age ans appartient à la catégorie « Cadet »";
//      default:
//          echo "La catégorie n'est pas gérée.";
//  }

if($age>=6 && $age<=7){
    echo "L'enfant qui a $age ans appartient à la catégorie « Poussin »";
}
elseif($age>=8 && $age<=9){
    echo "L'enfant qui a $age ans appartient à la catégorie « Pupille »";
}
elseif($age>=10 && $age<=11){
    echo "L'enfant qui a $age ans appartient à la catégorie « Minime »";
}
elseif($age>=12){
    echo "L'enfant qui a $age ans appartient à la catégorie « Cadet »";
}
else{
    echo "La catégorie n'est pas gérée.";
}

?>