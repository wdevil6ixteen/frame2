<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Метод для отображения списка задач
    public function index()
    {
        $tasks = [
            ['id' => 1, 'title' => 'Задача 1'],
            ['id' => 2, 'title' => 'Задача 2'],
            ['id' => 3, 'title' => 'Задача 3'],
        ];

        return view('tasks.index', ['tasks' => $tasks]);
    }

    // Метод для отображения отдельной задачи
    public function show($id)
    {
        $task = [
            'id' => $id,
            'title' => 'Задача ' . $id,
            // Дополнительные поля можно добавить по мере необходимости
        ];

        return view('tasks.show', ['task' => $task]);
    }
}
