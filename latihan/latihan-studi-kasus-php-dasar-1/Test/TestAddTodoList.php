<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Dandi Rasyid");
addTodoList("Syafira Anindita Maharani");
addTodoList("Belajar Dasar PHP di PZN");

var_dump($todoList);