<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../View/ViewAddTodoList.php";
require_once "../Helper/Input.php";

addTodoList("Dandi Rasyid");
addTodoList("Syafira Anindita Maharani");
addTodoList("Belajar PHP Dasar");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP WEB");

showTodoList();

viewAddTodoList();

showTodoList();
