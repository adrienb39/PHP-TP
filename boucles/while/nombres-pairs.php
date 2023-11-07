<?php

$nombreUtilisateur = readline("Saisir un nombre : ");
$nombre = 0;
$sommeNombresPairs = 0;
while ($nombre <= $nombreUtilisateur) {
    if($nombre % 2  == 0) {
        echo $nombre . ' ';
        $sommeNombresPairs += $nombre;
    }
    $nombre+=1;
}
echo PHP_EOL;
echo "La somme des nombres pairs est $sommeNombresPairs.\n";
