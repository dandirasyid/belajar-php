<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";


function viewAddTodolist() {
    echo "Menambah Todo List " . PHP_EOL;

    $todo = input("Todo (x untuk membatalkan)");

    if ($todo == "x") {
        echo "Batal Menambahkan Todo List" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}
