<?php

use Emeu17\Highscore\Highscore;

require_once __DIR__ . "/bootstrap.php";

if ($argc !== 4) {
    echo "Usage ${argv[0]} <name> <playerScore> <computerScore>\n";
    exit(1);
}

$newScoreName = $argv[1];
$newScorePlayer = $argv[2];
$newScoreComputer = $argv[3];

$highscore = new Highscore();
$highscore->setName($newScoreName);
$highscore->setPlayerScore($newScorePlayer);
$highscore->setComputerScore($newScoreComputer);

$entityManager->persist($highscore);
$entityManager->flush();

echo "Created Highscore with ID " . $highscore->getId() . "\n";
