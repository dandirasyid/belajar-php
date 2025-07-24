<?php

/**
 * Menampilkan todo di list
 */

function showTodoList() {
    // Mengambil dari global scope di model
    global $todoList;

    echo "TODO LIST" . PHP_EOL;

    foreach ($todoList as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}
