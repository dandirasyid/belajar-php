<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Dandi Rasyid");
addTodoList("Syafira Anindita Maharani");

var_dump($todoList);
