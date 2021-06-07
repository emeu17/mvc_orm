<?php

require_once __DIR__ . "/bootstrap.php";

function cmp($a, $b) {
    return $a->cmp < $b->cmp;
}

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

foreach ($highscores as $score) {

        $score->comp = $score->getPlayerScore() / $score->getComputerScore(); //this is the only new data
}


usort($highscores, "cmp");

print_r($highscores);

// echo ($highscores[1]->playerScore);
