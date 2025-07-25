<?php

require_once __DIR__ . "/../Helper/input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList() {
    echo "Menghapus Todo" . PHP_EOL;

    $pilihan = input("Nomor (x untuk membatalkan pilihan)");

    if ($pilihan == "x") {
        echo "Batal Menghapus Todo" . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);

        if ($success) {
            echo "Berhasil Menghapus Todo" . PHP_EOL;
        } else {
            echo "Gagal Menghapus Todo" . PHP_EOL;
        }
    }
}
