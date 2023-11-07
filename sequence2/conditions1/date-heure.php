<?php
// Afficher la date du jour, l'heure courante et si il affiche une bonne matinée ou une bonne après-midi en fonction de l'heure
echo "Aujourd'hui nous sommes le " . date("d/m/Y");
echo PHP_EOL;
echo "Il est actuellement " . date("H\hi");
echo PHP_EOL;
if (date("H")>=13) {
    echo "Je vous souhaite un bon après-midi";
} else {
    echo "Je vous souhaite une bonne matinée";
}