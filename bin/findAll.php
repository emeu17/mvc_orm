<?php

require_once __DIR__ . "/bootstrap.php";

$bookRepository = $entityManager->getRepository('\Emeu17\Book\Book');
$books = $bookRepository->findAll();

echo "All books\n--------------------\n";

if ($books) {
    foreach ($books as $book) {
        echo sprintf("%2d - %s, %s, (%d), %s\n",
            $book->getId(),
            $book->getTitle(),
            $book->getAuthor(),
            $book->getIsbn(),
            $book->getPic()
        );
    }
} else {
    echo " (empty)\n";
}
