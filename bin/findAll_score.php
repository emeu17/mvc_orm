<?php

require_once __DIR__ . "/bootstrap.php";

$scoreRepository = $entityManager->getRepository('\Emeu17\Highscore\Highscore');
$highscores = $scoreRepository->findAll();

echo "Highscore\n--------------------\n";

if ($highscores) {
    foreach ($highscores as $score) {
        echo sprintf("%2d - %s, %2d, %2d\n",
            $score->getId(),
            $score->getName(),
            $score->getPlayerScore(),
            $score->getComputerScore()
        );
    }
} else {
    echo " (empty)\n";
}
