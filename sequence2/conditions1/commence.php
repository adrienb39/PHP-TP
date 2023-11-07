<?php
// Demander la saisi d'un mot et ensuite afficher si le mot commence par la lettre p
$mot = readline("Ecrivez un mot : ");
$mot = strtolower($mot);
if (substr($mot, 0, 1)=='p') {
    echo "Le mot " . $mot . " commence par p";
} else {
    echo "Le mot " . $mot . " ne commence pas par p";
}
// Affiche si le mot contient au moins 5 caractères
if (strlen($mot)>=5) {
    echo "Le mot contient plus de 5 caractères";
} else {
    echo "Le mot contient moins de 5 caractères";
}

/*
if (str_starts_with($mot,'p')) {
    echo "Le mot " . $mot . " commence par p";
} else {
    echo "Le mot " . $mot . " ne commence pas par p";
} */