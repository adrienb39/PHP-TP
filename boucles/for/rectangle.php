<?php
$largeur = readline("Largeur du rectangle : ");
$hauteur = readline("Hauteur du rectangle : ");
for ($i=0; $i<$hauteur; $i++) {
    echo PHP_EOL;
    for ($j=0; $j<$largeur; $j++) {
        echo "* ";
    }
}