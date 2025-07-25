<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";

function viewShowTodoList() {

    while (true) {
        showTodoList();

        echo "Menu " . PHP_EOL;
        echo "1. Tambah Todo List" . PHP_EOL;
        echo "2. Hapus Todo List" . PHP_EOL;
        echo "x. Batal Menambahkan Todo List" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == 1) {
            viewAddTodolist();
        } else if ($pilihan == 2) {
            viewRemoveTodoList();
        } else if ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan Tidak Dapat Dimengerti" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Kembali...";
}
