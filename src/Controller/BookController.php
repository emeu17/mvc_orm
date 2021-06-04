<?php

namespace App\Controller;


// use Doctrine\ORM\EntityManagerInterface;
use Emeu17\Book\Book;
// use Doctrine\ORM\EntityManager;
// use App\Entity\Book;

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
        require_once __DIR__ . "/../../bin/bootstrap.php";
        $bookRepository = $entityManager->getRepository('\Emeu17\Book\Book');
        $books = $bookRepository->findAll();

        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: createAction(EntityManagerInterface $entityManager)
        // $entityManager = $this->getDoctrine()->getManager();

        // $bookRepository = $this->getDoctrine()->getRepository(Book::class);
        // $books = $bookRepository->findAll();

        // if ($books) {
        //     foreach ($books as $book) {
        //         echo sprintf("%2d - %s, %s, (%d), %s\n",
        //             $book->getId(),
        //             $book->getTitle(),
        //             $book->getAuthor(),
        //             $book->getIsbn(),
        //             $book->getPic()
        //         );
        //     }
        // } else {
        //     echo " (empty)\n";
        // }
        return $this->render('books.html.twig', [
            'books' => $books,
        ]);
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
