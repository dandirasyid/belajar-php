<?php

namespace Service;

use Entity\Book;
use Repository\BookRepository;

interface BookService {
    function addBook(string $title, string $author): void;
    function showBook(): void;
    function searchBook(string $title): void;
    function removeBook(string $id): void;
}

class BookServiceImpl implements BookService {
    private BookRepository $bookRepository;

    public function __construct(BookRepository $bookRepository) {
        $this->bookRepository = $bookRepository;
    }

    public function addBook(string $title, string $author): void {
        $id = uniqid("book_");
        $book = new Book($id, $title, $author);
        $this->bookRepository->save($book);

        echo "✅ Buku Berjudul : $title . Berhasil Ditambahkan" . PHP_EOL;
    }

    public function showBook(): void {
        $books = $this->bookRepository->findAll();
        if (empty($books)) {
            echo "❌ Tidak Ada Buku" . PHP_EOL;
        }

        echo "Daftar Buku" . PHP_EOL;
        foreach ($books as $book) {
            echo "{$book->getId()} | {$book->getTitle()} - {$book->getAuthor()}" . PHP_EOL;
        }
    }

    public function searchBook(string $title): void {
        $book = $this->bookRepository->findByTitle($title);
        if ($book) {
            $bookTitle = $book->getTitle();
            $bookAuthor = $book->getAuthor();
            echo "🔍 Ditemukan : $bookTitle - $bookAuthor" . PHP_EOL;
        } else {
            echo "❌ Buku Tidak Ditemukan" . PHP_EOL;
        }
    }

    public function removeBook(string $id): void {
        if ($this->bookRepository->remove($id)) {
            echo "🗑️ Buku Berhasil Dihapus" . PHP_EOL;
        } else {
            echo "⚠️ Buku Tidak Ditemukan" . PHP_EOL;
        }
    }
}
