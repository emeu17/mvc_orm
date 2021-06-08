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
        // $entityManager = $this->getDoctrine()->getManager();
        include_once __DIR__ . "/../../bin/bootstrap.php";
        // file_get_contents(__DIR__ . "/../../bin/bootstrap.php");
        $bookRepository = $entityManager->getRepository('\Emeu17\Book\Book');
        $books = $bookRepository->findAll();

        return $this->render('books.html.twig', [
            'books' => $books,
        ]);
    }
}
