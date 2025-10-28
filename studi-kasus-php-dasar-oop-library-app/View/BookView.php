<?php

namespace View;

use Helper\InputHelper;
use Service\BookService;

class BookView {
    private BookService $bookService;

    public function __construct(BookService $bookService) {
        $this->bookService = $bookService;
    }

    public function showMenu(): void {
        while (true) {
            echo "\n ========= MENU PERPUSTAKAAN ========= \n";
            echo "1. Tampilkan Buku" . PHP_EOL;
            echo "2. Tambah Buku" . PHP_EOL;
            echo "3. Cari Buku" . PHP_EOL;
            echo "4. Hapus Buku" . PHP_EOL;
            echo "X. Keluar" . PHP_EOL;

            $choice = InputHelper::input("Pilih Menu");

            switch ($choice) {
                case "1":
                    $this->bookService->showBook();
                    break;
                case "2":
                    $title = InputHelper::input("Judul Buku");
                    $author = InputHelper::input("Nama Penulis");
                    $this->bookService->addBook($title, $author);
                    break;
                case "3":
                    $title = InputHelper::input("Masukan Judul Buku Yang Dicari");
                    $this->bookService->searchBook($title);
                    break;
                case "4":
                    $id = InputHelper::input("Id Buku Yang Dihapus");
                    $this->bookService->removeBook($id);
                    break;
                case "X":
                    echo "👋 Terima Kasih" . PHP_EOL;
                    exit;
                default:
                    echo "❌ Pilihan Tidak Tersedia" . PHP_EOL;
            }
        }
    }
}
