<?php
$a = readline("Entrer le coefficient a : ");
$b = readline("Entrer le coefficient b : ");
$c = readline("Entrez le coefficient c : ");
echo "Résolution de l'équation ".$a."x"."²"."+".$b."x"."+".$c;
$delta = pow($b,2)-(4*$a*$c);
echo PHP_EOL;
if ($delta>0) {
    $solution1 = -($b+sqrt($delta))/(2*$a);
    $solution2 = -($b-sqrt($delta))/(2*$a);
    echo "Il y a deux solutions distinctes : ";
    echo PHP_EOL;
    echo "x1 = " . $solution1;
    echo PHP_EOL;
    echo "x1 = " . $solution2;
} elseif ($delta==0) {
    $solution = -($b)/(2*$a);
    echo "Il y a une solutions : ";
    echo PHP_EOL;
    echo "x0 = " . $solution;
} else {
    echo "Pas de solution";
}