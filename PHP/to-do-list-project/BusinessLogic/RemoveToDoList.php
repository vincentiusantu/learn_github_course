<?php

function removeToDoList(int $number): bool{
    global $todoList;

    if($number > sizeof($todoList) or $number < 1){
        return false;
    }
    
    for($i = $number; $i < sizeof($todoList); $i++){
        $todoList[$i] = $todoList[$i+1];
    }

    unset($todoList[sizeof($todoList)]);
    return true;
    
}

?>