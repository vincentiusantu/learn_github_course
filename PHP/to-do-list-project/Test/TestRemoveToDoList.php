<?php

require_once "../Model/ToDoList.php";
require_once "../BusinessLogic/RemoveToDoList.php";

$todoList[1] = "Belajar PHP Dasar";
$todoList[2] = "Belajar PHP OOP";
$todoList[3] = "Belajar PHP Database";

$remove = removeToDoList(4);

if($remove === true){
    echo "Penghapusan berhasil" . PHP_EOL;
} else {
    echo "Penghapusan gagal" . PHP_EOL;
}

var_dump($todoList);

?>