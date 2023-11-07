<?php
echo "Aujourd'hui nous sommes le " . date("d/m/Y");
echo PHP_EOL;
if (date("D")=="Samedi") {
    echo "Je vous souhaite un bon week-end";
} elseif (date("D")=="dimanche") {
    echo "Je vous souhaite une bon dimanche";
} else {
    echo "Je vous souhaite une bonne journée";
}