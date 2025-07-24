<?php

/**
 * Menambah todo ke list
 */

function addTodoList(string $todo) {
    global $todoList;

    // Mengecek panjang dari todo list 
    $number = sizeof($todoList) + 1;
    $todoList[$number] = $todo;
}
