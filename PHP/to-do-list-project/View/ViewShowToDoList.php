<?php

require_once __DIR__ . "/../Model/ToDoList.php";
require_once __DIR__ . "/../View/ViewRemoveToDoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowToDoList.php";
require_once __DIR__ . "/../Helper/input.php";
require_once __DIR__ . "/../View/ViewAddToDoList.php";

function viewShowToDoList(){
    while(true){
        showToDoList();
    
        echo "\nMENU" . PHP_EOL;
        echo "1. Tambah Menu" . PHP_EOL;
        echo "2. Hapus Menu" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;
    
        $pilihan = input("Pilih: ");
        if($pilihan == "1"){
            viewAddToDoList();
        } else if($pilihan == "2"){
            viewRemoveToDoList();
        } else if($pilihan == "x"){
            break;
        } else {
            echo "Pilihan tidak tersedia!" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Lagi!" . PHP_EOL;
}

?>