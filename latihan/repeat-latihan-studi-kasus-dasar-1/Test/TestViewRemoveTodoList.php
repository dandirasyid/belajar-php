<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../Helper/Input.php";

addTodoList("Dandi Rasyid");
addTodoList("Syafira Anindita Maharani");
addTodoList("Belajar PHP Di PZN");
addTodoList("Belajar Javascript");
addTodoList("Belajar Laravel");
addTodoList("Belajar Node JS");

showTodoList();

viewRemoveTodoList();

showTodoList();
