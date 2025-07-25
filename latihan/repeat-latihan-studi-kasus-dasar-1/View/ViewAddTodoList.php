<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

function viewAddTodoList() {
    echo "Menambahkan Todo List" . PHP_EOL;
    $todo = input("Todo (x untuk batal)");

    if ($todo == "x") {
        echo "Gagal Menambahkan Todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}
