<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php

$jour=new DateTime();
$anniv=new DateTime('1995-06-21');
$diff=date_diff($jour, $anniv);
echo "Âge de la personne : ".$diff->format('%y ans %m mois et %d jours');
