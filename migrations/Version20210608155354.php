<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210608155354 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__book AS SELECT id, title, author, isbn, pic FROM book');
        $this->addSql('DROP TABLE book');
        $this->addSql('CREATE TABLE book (id_book INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(50) NOT NULL COLLATE BINARY, author VARCHAR(50) NOT NULL COLLATE BINARY, isbn VARCHAR(50) NOT NULL COLLATE BINARY, pic VARCHAR(200) NOT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO book (id_book, title, author, isbn, pic) SELECT id, title, author, isbn, pic FROM __temp__book');
        $this->addSql('DROP TABLE __temp__book');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__book AS SELECT id_book, title, author, isbn, pic FROM book');
        $this->addSql('DROP TABLE book');
        $this->addSql('CREATE TABLE book (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(50) NOT NULL, author VARCHAR(50) NOT NULL, isbn VARCHAR(50) NOT NULL, pic VARCHAR(200) NOT NULL)');
        $this->addSql('INSERT INTO book (id, title, author, isbn, pic) SELECT id_book, title, author, isbn, pic FROM __temp__book');
        $this->addSql('DROP TABLE __temp__book');
    }
}
