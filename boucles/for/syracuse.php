<?php
$n=15;
echo "Les 20 premiers termes de la suite de Syracuse pour N=15 sont : ";
for ($i=1; $i<=20; $i++) {
    echo $n . " ";
    if ($n%2==0) {
        $n=$n/2;
    } elseif ($n%2!=0) {
        $n=$n*3+1;
    }
}