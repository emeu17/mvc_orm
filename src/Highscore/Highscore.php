<?php

namespace Emeu17\Highscore;


class Highscore
{
    /**
     * @var int
     */
    protected $idScore;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $playerScore;

    /**
     * @var int
     */
    protected $computerScore;


    public function getId()
    {
        return $this->idScore;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPlayerScore()
    {
        return $this->playerScore;
    }

    public function setPlayerScore($playerScore)
    {
        $this->playerScore = $playerScore;
    }

    public function getComputerScore()
    {
        return $this->computerScore;
    }

    public function setComputerScore($computerScore)
    {
        $this->computerScore = $computerScore;
    }
}
