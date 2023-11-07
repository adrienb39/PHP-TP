<?php
$distance = readline("Saisir la distance du trajet (kms) : ");
$duree = readline("Saisir la durée du trajet (h:mn) : ");
$heure = (int)substr($duree, 0, 1);
$minute = (int)substr($duree, 2, 4);
$vitesse = ceil($distance/($heure+$minute/60));
if ($minute>=60) {
    echo "ERREUR : la durée " . $duree . " est invalide";
} else {
    echo "La vitesse moyenne du trajet est de " . $vitesse . " km/h";
    echo PHP_EOL;
    if ($vitesse>90) {
        echo "Vous êtes au dessus des 90 km/h";
    } else {
        echo "Vous êtes au dessous des 90 km/h";
    }
}