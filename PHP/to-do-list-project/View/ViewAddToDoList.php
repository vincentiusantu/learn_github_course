<?php

require_once __DIR__ . "/../Model/ToDoList.php";
require_once __DIR__ . "/../Helper/input.php";
require_once __DIR__ . "/../BusinessLogic/AddToDoList.php";
require_once __DIR__ . "/../View/ViewShowToDoList.php";

function viewAddToDoList(){
    
    echo "\nTAMBAH LIST" . PHP_EOL;

    $tambah = input("Tambah (x untuk batal): ");
    if($tambah == "x"){
        echo "Batal Menambahkan List";
    }else{
        addToDoList($tambah);
    }
}

?>