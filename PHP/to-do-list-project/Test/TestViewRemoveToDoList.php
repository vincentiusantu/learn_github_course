<?php

require_once "../Model/ToDoList.php";
require_once "../View/ViewRemoveToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";
require_once "../BusinessLogic/ShowToDoList.php";

addToDoList("PHP");
addToDoList("JS");
addToDoList("Python");

showToDoList();

viewRemoveToDoList();

showToDoList();

?>