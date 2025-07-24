<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Dandi");
addTodoList("Rasyid");
addTodoList("Syafira");

var_dump($todoList);
