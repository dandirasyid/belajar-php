<?php

require_once __DIR__ . "/Model/TodoList.php";
require_once __DIR__ . "/BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/BusinessLogic/RemoveTodoList.php";
require_once __DIR__ . "/BusinessLogic/RemoveTodoList.php";
require_once __DIR__ . "/View/ViewAddTodoList.php";
require_once __DIR__ . "/View/ViewRemoveTodoList.php";
require_once __DIR__ . "/View/ViewShowTodoList.php";
require_once __DIR__ . "/Helper/Input.php";

echo "APLIKASI TODO LIST" . PHP_EOL;

viewShowTodoList();
