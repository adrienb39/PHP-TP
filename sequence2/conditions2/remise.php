<?php
$fondRouge = "\033[41m";
$normal = "\033[0m";

$prix = readline("Saisir le prix de l'article : ");
if ($prix<1000) {
    $remise5 = $prix*0.05;
    $montant5 = $prix-$remise5;
    echo "La remise est de 5% soit " . $fondRouge . number_format($remise5, 2) . $normal . " euros sur le prix de l'article";
    echo PHP_EOL;
    echo "Le montant de l'article après remise est de " . $fondRouge . number_format($montant5, 2) . $normal . " euros";
} elseif ($prix>=1000 && $prix<5000) {
    $remise10 = $prix*0.10;
    $montant10 = $prix-$remise10;
    echo "La remise est de 10% soit " . $fondRouge . number_format($remise10, 2) . $normal . " euros sur le prix de l'article";
    echo PHP_EOL;
    echo "Le montant de l'article après remise est de " . $fondRouge . number_format($montant10, 2) . $normal . " euros";
} else {
    $remise20 = $prix*0.20;
    $montant20 = $prix-$remise20;
    echo "La remise est de 20% soit " . $fondRouge . number_format($remise20, 2) . $normal . " euros sur le prix de l'article";
    echo PHP_EOL;
    echo "Le montant de l'article après remise est de " . $fondRouge . number_format($montant20, 2) . $normal . " euros";
}