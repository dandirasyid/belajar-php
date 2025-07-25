<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Dandi");
addTodoList("Rasyid");
addTodoList("Syafira");
addTodoList("Anindita");
addTodoList("Maharani");
addTodoList("Programmer Zaman Now");

viewAddTodolist();

showTodoList();

viewAddTodolist();

showTodoList();