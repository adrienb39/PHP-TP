<?php
$prenom = readline("Saisir votre prénom : ");
$nom = readline("Saisir votre nom : ");

echo "Vos initiales sont " . strtoupper(substr($prenom, 0,1)) . strtoupper(substr($nom, 0,1));