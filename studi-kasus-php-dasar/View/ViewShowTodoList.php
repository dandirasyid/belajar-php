<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewShowTodoList() {
    while (true) {

        showTodoList();

        echo "Menu" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "X. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");
        if ($pilihan == 1) {
            viewAddTodoList();
        } else if ($pilihan == 2) {
            viewRemoveTodoList();
        } else if ($pilihan == "X") {
            // Kembali
            break;
        } else {
            echo "Pilihan tidak dapat dimengerti" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Lagi...";
}
