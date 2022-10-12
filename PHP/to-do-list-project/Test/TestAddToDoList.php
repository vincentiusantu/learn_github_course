<?php

require_once "../Model/ToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";

addToDoList("C++");
addToDoList("PHP");
addToDoList("JS");

var_dump($todoList);

?>