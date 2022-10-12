<?php

function showToDoList(){
    global $todoList;

    echo "\nTO DO LIST" . PHP_EOL;

    foreach ($todoList as $number => $value){
        echo "$number. $value" . PHP_EOL;
    }
}

?>