<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";

use Entity\TodoList;
use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;

function testShowTodoList(): void{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListRepository->todolist[1] = new TodoList("Belajar PHP");
    $todoListRepository->todolist[2] = new TodoList("Belajar PHP OOP");
    $todoListRepository->todolist[3] = new TodoList("Belajar PHP Database");
    $todolistService = new TodoListServiceImpl($todoListRepository);

    $todolistService->showTodoList();
}

function testAddTodoList(): void {
    $todoListRepository = new TodoListRepositoryImpl();
    $todolistService = new TodoListServiceImpl($todoListRepository);
    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP Database");

    $todolistService->showTodoList();
}

function testRemoveTodoList(): void {
    $todoListRepository = new TodoListRepositoryImpl();
    $todolistService = new TodoListServiceImpl($todoListRepository);
    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP Database");

    $todolistService->showTodoList();

    $todolistService->removeTodoList(1);
    $todolistService->showTodoList();
    $todolistService->removeTodoList(4);
    $todolistService->showTodoList();
    $todolistService->removeTodoList(2);
    $todolistService->showTodoList();

}

// testAddTodoList();
// testShowTodoList();
testRemoveTodoList();

?>