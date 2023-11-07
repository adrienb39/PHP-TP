<?php
$phrase = readline("Saisir une phrase : ");
$mot = readline("Saisir un mot : ");

echo "Le mot \"" . $mot  . "\" apparait " . substr_count($phrase, $mot) . " fois dans la phrase";