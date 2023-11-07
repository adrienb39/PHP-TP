<?php
$heure = readline("Saisir une heure (h:mm) : ");
$positionSeparateur = strpos($heure,":");
$heures = substr($heure,0,$positionSeparateur,);
if ($heures>=9 && $heures<12 || $heures>=14 && $heures<19) {
    echo "Le magasin est ouvert";
} else {
    echo "Le magasin est fermé";
}