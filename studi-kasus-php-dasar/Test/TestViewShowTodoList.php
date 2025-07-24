<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Dandi Rasyid");
addTodoList("Syafira");
addTodoList("Belajar PHP");
addTodoList("Di PZN");

viewShowTodoList();
