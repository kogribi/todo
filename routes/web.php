<?php

use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware("guest");

Route::get('/why', function () {
    return view('why');
});

Route::get('/iphone', function () {
    return view('iphone');
});

Route::get('/todos', [ToDoController::class, 'index'])->middleware("auth");

Route::get('/todos/create', [ToDoController::class, 'create'])->middleware("auth");

Route::get('/todos/{todo}', [ToDoController::class, 'show'])->middleware("auth");

Route::post('/todos', [ToDoController::class, 'store'])->middleware("auth");;

Route::get('/todos/{todo}/edit', [ToDoController::class, 'edit'])->middleware("auth");

Route::put('/todos/{todo}', [ToDoController::class, 'update'])->middleware("auth");;

Route::delete('/todos/{todo}', [ToDoController::class, 'destroy'])->middleware("auth");;



Route::get('/diaries', [DiaryController::class, 'index'])->middleware("auth");

Route::get('/diaries/create', [DiaryController::class, 'create'])->middleware("auth");

Route::get('/diaries/{diary}', [DiaryController::class, 'show'])->middleware("auth");

Route::post('/diaries', [DiaryController::class, 'store'])->middleware("auth");;

Route::get('/diaries/{diary}/edit', [DiaryController::class, 'edit'])->middleware("auth");

Route::put('/diaries/{diary}', [DiaryController::class, 'update'])->middleware("auth");;

Route::delete('/diaries/{diary}', [DiaryController::class, 'destroy'])->middleware("auth");;

Route::get('/auth', function () {return view('auth.auth');})->middleware("auth");

Route::get('/register', [RegisterController::class, 'create'])->middleware("guest");
Route::post('/register', [RegisterController::class, 'store']);

Route::delete('/logout', [SessionController::class, 'destroy']);
Route::get('/login', [SessionController::class, 'create'])->name("login");
Route::post('/login', [SessionController::class, 'store']);
Route::get('/auth', [SessionController::class, 'index'])->middleware("auth");
