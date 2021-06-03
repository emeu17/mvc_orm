<?php

use Emeu17\Book\Book;

require_once __DIR__ . "/bootstrap.php";

if ($argc !== 5) {
    echo "Usage ${argv[0]} <title> <author> <isbn> <pic>\n";
    exit(1);
}

$newBookTitle = $argv[1];
$newBookAuthor = $argv[2];
$newBookIsbn = $argv[3];
$newBookPic = $argv[4];

$book = new Book();
$book->setTitle($newBookTitle);
$book->setAuthor($newBookAuthor);
$book->setIsbn($newBookIsbn);
$book->setPic($newBookPic);

$entityManager->persist($book);
$entityManager->flush();

echo "Created Book with ID " . $book->getId() . "\n";
