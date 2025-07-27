<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewRemoveTodoList() {
    echo "Menghapus Todo List" . PHP_EOL;
    $number = input("Nomor (x untuk batal)");

    if ($number == "x") {
        echo "Batal Menghapus Todo List" . PHP_EOL;
    } else {
        $success = removeTodoList($number);

        if ($success) {
            echo "Berhasil Menghapus Todo List Nomor $number" . PHP_EOL;
        } else {
            echo "Gagal Menghapus Todo List Nomor $number" . PHP_EOL;
        }
    }
}
