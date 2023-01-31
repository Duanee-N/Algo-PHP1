<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe. Si la personne est une femme dont l'âge est compris entre 18 et 35 ans ou si c'est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n'est pas le cas, «non imposable»).</p>

<h2>Résultat</h2>

<?php

$age=rand(10, 50);
$tableau=array("F"=>0,"H"=>1);
$sexe=rand(0,1);
if($sexe==0){
    if($age>=18 && $age<=35){
        echo "Âge : $age <br> Sexe : F <br> La personne est imposable.";
    }else{
            echo "Âge : $age <br> Sexe : F <br> Non imposable.";
        }
}else{
    if($age>=20){
     echo "Âge : $age <br> Sexe : H <br> La personne est imposable.";
    }else{
        echo "Âge : $age <br> Sexe : H <br> Non imposable.";
    }
}

// $age=rand(10, 50);
// $tableau = ["F", "H"];
// $sexe = array_rand($sexe, 1); //valeur random dans tableau
// if ($sexe_personne == 0) {
// 	$sexe = "M";
// } else {
// 	$sexe = "F";
// }
// echo "<br>Age : " . $age;
// echo "<br>Sexe : " . $sexe;
// if ($sexe == "M") {
// 	if ($age <= 20) {
// 		echo "<br>La personne est non imposable";
// 	} else {
// 		echo "<br>La personne est imposable";
// 	}
// } else {
// 	if ($age >= 18 and $age <= 35) {
// 		echo "<br>La personne est imposable";
// 	} else {
// 		echo "<br>La personne est non imposable";
// 	}
// }

?>