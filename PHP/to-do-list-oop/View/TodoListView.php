<?php

namespace View {

    use Service\TodoListService;
    use Helper\InputHelper;

    class TodoListView {

        private TodoListService $todoListService;

        public function __construct(TodolistService $todoListService)
        {
            $this->todoListService = $todoListService;
        }

        function showTodoList(): void{
            while(true){
                $this->todoListService->showToDoList();
            
                echo "\nMENU" . PHP_EOL;
                echo "1. Tambah Menu" . PHP_EOL;
                echo "2. Hapus Menu" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;
            
                $pilihan = InputHelper::input("Pilih: ");
                if($pilihan == "1"){
                    $this->addTodoList();
                } else if($pilihan == "2"){
                    $this->removeTodoList();
                } else if($pilihan == "x"){
                    break;
                } else {
                    echo "Pilihan tidak tersedia!" . PHP_EOL;
                }
            }
        
            echo "Sampai Jumpa Lagi!" . PHP_EOL;
        }

        function addTodoList(): void {
            echo "\nTAMBAH LIST" . PHP_EOL;

            $tambah = InputHelper::input("Tambah (x untuk batal): ");
            if($tambah == "x"){
                echo "Batal Menambahkan List";
            }else{
                $this->todoListService->addToDoList($tambah);
            }
        }

        function removeTodoList(): void{
            echo "\nHAPUS LIST" . PHP_EOL;
            $pilihan = InputHelper::input("Nomor (x untuk batal): ");

            if ($pilihan == "x"){
                echo "Batal Menghapus List" . PHP_EOL;
            } else{
                $this->todoListService->removeToDoList($pilihan);
            }
        }
    }
}

?>