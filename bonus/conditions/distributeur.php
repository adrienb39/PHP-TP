<?php
$eau = number_format(1.20, 2);
$soda = 3;
$cafe = 2;
echo "1. Eau - " . $eau . "€";
echo PHP_EOL;
echo "2. Soda - " . $soda . "€";
echo PHP_EOL;
echo "3. Café - " . $cafe . "€";
echo PHP_EOL;
$numeroBoisson = readline("Veuillez sélectionner une boisson : ");
while ($numeroBoisson<=0 || $numeroBoisson>3) {
    echo "Sélection invalide. Veuillez choisir 1, 2, ou 3";
    echo PHP_EOL;
    $numeroBoisson = readline("Veuillez sélectionner une boisson : ");
}
if ($numeroBoisson==1) {
    $prix = $eau;
} elseif ($numeroBoisson==2) {
    $prix = $soda;
} elseif ($numeroBoisson==3) {
    $prix = $cafe;
}
$argents = readline("Veuillez insérer de l'argent.  Il vous reste à payer " . $prix . "€ : ");
while ($argents<$prix) {
        $restant = $prix - $argents;
        $argents += readline("Veuillez insérer de l'argent.  Il vous reste à payer " . $restant . "€ : ");
}
if ($argents>$prix) {
    $monnaie = $argents - $prix;
    echo "Voici votre monnaie : " . $monnaie . "€";
    echo PHP_EOL;
}
echo "Voici votre boisson. Merci";