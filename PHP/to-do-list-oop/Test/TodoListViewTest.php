<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Helper/InputHelper.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../View/TodoListView.php";

use Entity\TodoList;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

function testViewShowTodoList(): void{
    $todolistRepository = new TodoListRepositoryImpl;
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP Database");

    $todolistView->showTodoList();
}

function testViewAddTodoList(): void{
    $todolistRepository = new TodoListRepositoryImpl;
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP Database");

    $todolistView->showTodoList();
    
    $todolistView->addTodoList();

    $todolistView->showTodoList();
}

function testViewRemoveTodoList(): void{
    $todolistRepository = new TodoListRepositoryImpl;
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP Database");

    $todolistService->showTodoList();
    
    $todolistView->removeTodoList();

    $todolistService->showTodoList();

    $todolistView->removeTodoList();

    $todolistService->showTodoList();
}

testViewShowTodoList();

?>