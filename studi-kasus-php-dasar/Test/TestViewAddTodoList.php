<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Dandi");
addTodoList("Rasyid");
addTodoList("Syafira");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();
