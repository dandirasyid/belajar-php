<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function ViewRemoveTodoList() {
    echo "Menghapus Todo" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batalkan)");

    if ($pilihan == "x") {
        echo "Batal Menghapus Todo" . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);

        if ($success) {
            echo "Sukses Menghapus Todo Nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal Menghapus Todo Nomor $pilihan" . PHP_EOL;
        }
    }
}
