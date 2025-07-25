<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../View/ViewRemoveTodoList.php";

addTodoList("Dandi Rasyid");
addTodoList("Syafira");
addTodoList("Belajar PHP Dasar");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP Database");
addTodoList("Belajar PHP Web");

showTodoList();

ViewRemoveTodoList();

showTodoList();
