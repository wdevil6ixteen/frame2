<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    // Метод для главной страницы
    public function index()
    {
        // Возвращаем представление home.blade.php
        return view('home');
    }

    // Метод для страницы "О нас"
    public function about()
    {
        // Возвращаем представление about.blade.php
        return view('about');
    }
}
