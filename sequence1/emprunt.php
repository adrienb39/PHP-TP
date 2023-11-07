<?php
$montantEmprunte = readline("Saisir le montant à emprunter : ");
$tauxInteretAnnuel = readline("Saisir le taux d'intérêt (%) : ");
$duree = readline("Saisir la durée (en année) : ");
$nombresMois = $duree*12;
$tauxInteretMensuel = ($tauxInteretAnnuel/100)/12;
// Application de la formule de calcul
$numerateurFormule = round($montantEmprunte*$tauxInteretMensuel,2);
$denominateurFormule = 1 - pow(1 + $tauxInteretMensuel,-$nombresMois);
$montantMensualite = round($numerateurFormule / $denominateurFormule,2);
echo "La mensualité à rembourser est de $montantMensualite euros !";

$montantARembourser = $montantMensualite*$nombresMois;
$coutEmprunt = floor($montantARembourser - $montantEmprunte);
echo "Le coût de l'emprunt est de $coutEmprunt euros";