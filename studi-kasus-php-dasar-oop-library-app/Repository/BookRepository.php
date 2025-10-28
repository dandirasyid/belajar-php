<?php

namespace Repository;

use Entity\Book;

interface BookRepository {
    function save(Book $book): void;
    function remove(string $id): bool;
    function findAll(): array;
    function findByTitle(string $title): ?Book;
}

class BookRepositoryImpl implements BookRepository {
    private array $books = [];

    public function save(Book $book): void {
        $this->books[$book->getId()] = $book;
    }

    public function remove(string $id): bool {
        if (isset($this->books[$id])) {
            unset($this->books[$id]);
            return true;
        } else {
            return false;
        }
    }

    public function findAll(): array {
        return $this->books;
    }

    public function findByTitle(string $title): ?Book {
        foreach ($this->books as $book) {
            if (strtolower($book->getTitle()) === strtolower($title)) {
                return $book;
            }
        }
        return null;
    }
}
