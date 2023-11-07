<?php
// // Demander la saisi d'un nombre et ensuite afficher si le nombre est pair ou impair
$nombre = readline("Ecrivez un nombre : ");
if ($nombre%2==0) {
    echo "Le nombre est pair";
} else {
    echo "Le nombre est impair";
}