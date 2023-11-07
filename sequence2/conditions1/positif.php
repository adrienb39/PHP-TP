<?php
// Demander la saisie d'un nombre et ensuite afficher si le nombre est positif ou négatif
$nombre = readline("Ecrivez un nombre : ");
if ($nombre>=0) {
    echo "Le nombre " . $nombre . " est positif";
} else {
    echo "Le nombre " . $nombre . " est négatif";
}