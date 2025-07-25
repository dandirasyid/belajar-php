<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../View/ViewShowTodoList.php";

addTodoList("Dandi Rasyid");
addTodoList("Syafira Anindita");
addTodoList("Belajar Di PZN");

viewShowTodoList();
