<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Dandi Rasyid");
addTodoList("Syafira Anindita Maharani");
addTodoList("Belajar PHP Dasar Di PZN");

showTodoList();
