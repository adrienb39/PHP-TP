<?php
$nombres = readline("Saisir un nombre : ");
 for ($i=0; $i<=$nombres; $i++) {
    if ($i%2==0) {
        echo $i . " ";
    }
}