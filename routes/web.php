<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;

// Маршруты для главной страницы и страницы "О нас"
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);

// Если требуется, чтобы главная страница показывала view 'welcome' вместо HomeController, оставьте этот маршрут
Route::get('/welcome', function () {
    return view('welcome');
});

// Ресурсный маршрут для TaskController
Route::resource('tasks', TaskController::class);
?>
