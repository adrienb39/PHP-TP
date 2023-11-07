<?php

$nombreADeviner = readline("Saisir un nombre entre 0 et 1000 : ");
while ($nombreADeviner <0 || $nombreADeviner > 1000) {
    echo "Le nombre à deviner doit être compris entre 0 et 1000";
    echo PHP_EOL;
    $nombreADeviner = readline("Saisir un nombre entre 0 et 1000 : ");
}

$nbCoups = 1;
$nombreAleatoire = random_int(0,1000);
while ($nombreADeviner != $nombreAleatoire && $nbCoups <= 200) {
    $nombreAleatoire = random_int(0,1000);
    $nbCoups+=1;
}

// En sortie de boucle, on a deux cas possibles :
// - Soit le nombre a été trouvé, et donc $nombreAleatoire == $nombreADeviner
// - Soit le nombre n'a pas été trouvé, et donc $nbCoups > 200
if ($nombreAleatoire == $nombreADeviner) {
    echo "Le nombre à deviner a été trouvé en $nbCoups coups";
} else {
    echo "Tu n'as pas deviné en moins de 200 coups !";
}