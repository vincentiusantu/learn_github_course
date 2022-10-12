<?php

require_once "../View/ViewShowToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";

addToDoList("Belajar PHP");
addToDoList("Belajar JS");
addToDoList("Belajar Golang");

viewShowToDoList();

?>