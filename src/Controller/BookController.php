<?php

namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\ORM\EntityManagerInterface;
use Emeu17\Entity\Book;

class BookController extends AbstractController
{

    /**
     * @Route("/create_book", name="create_book")
     */
    public function createBook(): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $book = new Book();
        $book->setTitle('Coding with JavaScript For Dummies');
        $book->setAuthor('Chris Minnick');
        $book->setIsbn('978-1-119-05606-5');
        $book->setPic('https://media.wiley.com/product_data/coverImage300/71/11190560/1119056071.jpg');

        // $book->setTitle('PHP & MYSQL For Dummies');
        // $book->setAuthor('Janet Valade');
        // $book->setIsbn('978-0-470-58547-4');
        // $book->setPic('https://media.wiley.com/product_data/coverImage300/87/04705275/0470527587.jpg');
        //
        // $book->setTitle('Python For Dummies');
        // $book->setAuthor('Stef Maruch');
        // $book->setIsbn('978-0-471-77864-6');
        // $book->setPic('https://media.wiley.com/product_data/coverImage300/48/04717786/0471778648.jpg');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($book);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new book with id '.$book->getId());
    }

    /**
     * @Route("/books", name="books")
    */
    public function bookView(): Response
    {
        $books = $this->getDoctrine()
            ->getRepository(Book::class)
            ->findAll();

        return $this->render('books.html.twig', [
            'books' => $books,
        ]);
    }

    // /**
    //  * @Route("/remove_book", name="remove_book")
    //  */
    // public function deleteBook(): Response
    // {
    //     $em = $this->getDoctrine()->getManager();
    //     $book = $em->getRepository(Product::class);
    //     $em->remove($book);
    //     $em->flush();
    // }
}
