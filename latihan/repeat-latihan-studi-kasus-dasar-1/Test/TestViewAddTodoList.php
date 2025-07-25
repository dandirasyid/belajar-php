<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../View/ViewAddTodoList.php";

addTodoList("Dandi Rasyid");
addTodoList("Syafira Anindita Maharani");

showTodoList();

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();
