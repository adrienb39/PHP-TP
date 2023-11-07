<?php
$entier1 = readline("Saisir un nombre entier : ");
$entier2 = readline("Saisir un nombre entier : ");

$resultat = $entier1/$entier2;
echo "Le résultat de la division de " . $entier1 . " par " . $entier2 . " est " . round($resultat, 2);