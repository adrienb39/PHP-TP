<?php
$filename = 'resultats.txt';
// Présentation des règles du jeu
echo "Bienvenue dans le jeu de devinette !";
echo PHP_EOL;
echo "Le but du jeu est de deviner un nombre entre 1 et 100.";
echo PHP_EOL;
echo "Vous avez 10 à 15 essais pour trouver le nombre.";
echo PHP_EOL;
echo "Bonne chance !";
echo PHP_EOL;
echo PHP_EOL;
while ($filename == TRUE) {
    // Menu avec différents choix
    echo "1. Jouer";
    echo PHP_EOL;
    echo "2. Voir les résultats";
    echo PHP_EOL;
    echo "3. Voir les résulatats d'un jour";
    echo PHP_EOL;
    echo "4. Voir les résulatats d'un joueur";
    echo PHP_EOL;
    echo "5. Quitter";
    echo PHP_EOL;
    // Choix du joueur
    $choix = readline("Votre choix (1, 2, 3, 4 ou 5) : ");
    while ($choix < 1 || $choix > 5) {
        echo PHP_EOL;
        echo "Votre choix doit être 1, 2, 3, 4 ou 5";
        echo PHP_EOL;
        echo "1. Jouer";
        echo PHP_EOL;
        echo "2. Voir les résultats";
        echo PHP_EOL;
        echo "3. Voir les résulatats d'un jour";
        echo PHP_EOL;
        echo "4. Voir les résulatats d'un joueur";
        echo PHP_EOL;
        echo "5. Quitter";
        echo PHP_EOL;
        // Choix du joueur
        $choix = readline("Votre choix (1, 2, 3, 4 ou 5) : ");
    }
    if ($choix == 1) {
        $pseudo = readline("Saisir un pseudo : ");
        $nombre = readline("Saisir un nombre entre 1 et 100 : ");
        while ($nombre < 1 || $nombre > 100) {
            echo "Vous devez saisir un nombre entre 1 et 100 !";
            echo PHP_EOL;
            $nombre = readline("Saisir un nombre entre 1 et 100 : ");
        }

        $nombreTentative = 1;
        $nombreAleatoire = random_int(1, 100);
        $nombreEssai = random_int(10, 15);
        while ($nombre != $nombreAleatoire && $nombreTentative != $nombreEssai) {
            if ($nombre < $nombreAleatoire) {
                echo "Le nombre est trop petit";
                echo PHP_EOL;
                $nombre = readline("Saisir un nombre entre 1 et 100 : ");
            } else {
                echo "Le nombre est trop grand";
                echo PHP_EOL;
                $nombre = readline("Saisir un nombre entre 1 et 100 : ");
            }
            $nombreTentative += 1;
            echo $nombreTentative;
        }
        // En sortie de boucle, on a deux cas possibles :
        // - Soit le nombre a été trouvé avec moins de 10 tentatives
        // - Soit le nombre a été trouvé avec plus de 10 tentatives
        // - Soit lorsque le nombre maximal de tentatives a été atteint
        if ($nombreAleatoire == $nombre && $nombreTentative <= 10) {
            echo "Excellent " . $pseudo . " : Vous avez trouvé le nombre " . $nombre . " en " . $nombreTentative . " tentatives !";
            $message = "Excellent ! Vous avez trouvé le nombre en " . $nombreTentative . " essais";
        } elseif ($nombreAleatoire == $nombre && $nombreTentative > 10) {
            echo "Bien joué " . $pseudo . " : Vous avez trouvé le nombre " . $nombre . " en " . $nombreTentative . " tentatives !";
            $message = "Bien joué ! Vous avez trouvé le nombre en " . $nombreTentative . " essais";
        } else {
            echo "Désolé " . $pseudo . " : Vous avez atteint le nombre maximum de tentatives ! Le nombre était $nombreAleatoire";
            $message = "Perdu ! Le nombre à deviner était $nombreAleatoire";
        }

        echo PHP_EOL;
        $enregistrement = date("d/m/Y") . " " . date("H\:i\:s") . " - " . "Pseudo : " . $pseudo . " - " . "Résultat : " . $message . ".\n";
        // Vérification que le fichier est accessible en écriture
        if (is_writable($filename)) {
            // Dans notre exemple, nous ouvrons le fichier $filename en mode d'ajout
            // Le pointeur de fichier est placé à la fin du fichier
            // c'est là que $somecontent sera placé
            if (!$fp = fopen($filename, 'a')) {
                echo "Impossible d'ouvrir le fichier ($filename)";
                exit;
            }
            // Ecrivons quelque chose dans notre fichier.
            if (fwrite($fp, $enregistrement) === FALSE) {
                echo "Impossible d'écrire dans le fichier ($filename)";
                exit;
            }
            fclose($fp);
        } else {
            echo "Le fichier $filename n'est pas accessible en écriture.";
        }
    }
    if ($choix == 2) {
        $fp = @fopen("resultats.txt", "r");
        if ($fp) {
            while (($resultats = fgets($fp)) !== false) {
                echo $resultats;
            }
            if (!feof($fp)) {
                echo "Erreur: fgets() a échoué\n";
            }
            fclose($fp);
        }
    }
    if ($choix == 3) {
        $date = readline("Saisir une date au format dd/mm/YYYY : ");

    }
    if ($choix == 4) {
        $fp = @fopen("resultats.txt", "r");
        $pseudo = readline("Saisir un pseudo : ");
        if ($fp) {
            while (($resultat = fgets($fp)) !== false) {
                echo $pseudo;
            }
            if (!feof($fp)) {
                echo "Erreur: fgets() a échoué\n";
            }
            fclose($fp);
        }
    }
    if ($choix == 5) {
        break;
    }
    echo PHP_EOL;
}