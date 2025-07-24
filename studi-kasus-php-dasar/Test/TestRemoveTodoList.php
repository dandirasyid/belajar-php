<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Dandi");
addTodoList("Rasyid");
addTodoList("Syafira");
addTodoList("Anindita");

showTodoList();

removeTodoList(2);

showTodoList();