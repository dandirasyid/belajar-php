<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../View/ViewShowTodoList.php";
require_once "../Helper/Input.php";

addTodoList("Belajar PHP Di PZN");
addTodoList("Belajar PHP Dasar");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP Database");
addTodoList("Belajar PHP Web");

viewShowTodoList();
