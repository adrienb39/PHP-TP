<?php

$note = readline("Saisir une note : " );

while ($note <0 || $note > 20) {
    echo "La note saisie est doit être comprise entre 0 et 20 !";
    echo PHP_EOL;
    $note = readline("Saisir une note : " );
}
echo "La note saisie est correcte !";