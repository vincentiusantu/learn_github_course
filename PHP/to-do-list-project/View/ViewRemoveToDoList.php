<?php

require_once __DIR__ . "/../Model/ToDoList.php";
require_once __DIR__ . "/../Helper/input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveToDoList.php";
require_once __DIR__ . "/../View/ViewShowToDoList.php";

function viewRemoveToDoList(){
    echo "\nHAPUS LIST" . PHP_EOL;
    $pilihan = input("Nomor (x untuk batal): ");

    if ($pilihan == "x"){
        echo "Batal Menghapus List" . PHP_EOL;
    } else{
        $success = removeToDoList($pilihan);

        if($success){
            echo "Sukses menghapus list nomor $pilihan" . PHP_EOL;
        } else{
            echo "Gagal menghapus list nomor $pilihan" . PHP_EOL;
        }
    }
}

?>