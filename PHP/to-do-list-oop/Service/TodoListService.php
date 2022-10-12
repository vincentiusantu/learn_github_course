<?php

namespace Service {

    use Entity\TodoList;
    use Repository\TodoListRepository;

    interface TodoListService {

        function showTodoList(): void;

        function addTodoList(string $todo): void;

        function removeTodoList(int $number): void;
    }

    class TodoListServiceImpl implements TodoListService {

        private TodoListRepository $todoListRepository;

        public function __construct(TodoListRepository $todoListRepository)
        {
            $this->todoListRepository = $todoListRepository;
        }
        
        function showTodoList(): void
        {
            $todoList = $this->todoListRepository->findAll();
            echo "\nTO DO LIST" . PHP_EOL;

            foreach ($todoList as $number => $value){
                echo "$number. " . $value->getTodo() . PHP_EOL;
            }
        }

        function addTodoList(string $todo): void
        {
            $todoList = new TodoList($todo);
            $this->todoListRepository->save($todoList);
            echo "Sukses Menambah Todo List" . PHP_EOL;
        }

        function removeTodoList(int $number): void
        {
            if($this->todoListRepository->remove($number)){
                echo "Sukses Menghapus Todo List" . PHP_EOL;
            }else {
                echo "Gagal Menghapus Todo List" . PHP_EOL;
            }
        }
    }
}

?>