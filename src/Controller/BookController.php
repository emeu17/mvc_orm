<?php

namespace App\Controller;

use Emeu17\Book\Book;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{

    /**
     * @Route("/books", name="books")
    */
    public function bookView(): Response
    {
        return $this->render('books.html.twig');
    }
    //
    // /**
    //  * @Route("/dice_view", name="dice_view")
    // */
    // public function diceView(SessionInterface $session): Response
    // {
    //
    //     // $die = new Dice();
    //     $dicehand = new DiceHand();
    //     $graphdice = new GraphicalDice();
    //     $graphrolls = 6;
    //     $graphres = [];
    //     $graphclass = [];
    //     for ($i = 0; $i < $graphrolls; $i++) {
    //         $graphres[] = $graphdice->roll();
    //         $graphclass[] = $graphdice->asString();
    //     }
    //
    //     return $this->render('dice.html.twig', [
    //         // 'die' => $die,
    //         'dicehand' => $dicehand,
    //         'graphres' => $graphres,
    //         'graphclass' => $graphclass,
    //         'session' => $session,
    //     ]);
    // }
}
