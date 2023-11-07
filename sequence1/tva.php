<?php
$HT = readline("Saisir un prix HT : ");
$TVA = readline("Saisir un taux de TVA (en pourcentage) : ");

$TTC = $HT*(1+($TVA/100));
echo "Le prix TTC est de : " . round($TTC, 2);