<?php

use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/why', function () {
    return view('why');
});

Route::get('/iphone', function () {
    return view('iphone');
});

Route::get('/todos', [ToDoController::class, 'index']);

Route::get('/todos/create', [ToDoController::class, 'create']);

Route::get('/todos/{todo}', [ToDoController::class, 'show']);

Route::post('/todos', [ToDoController::class, 'store']);

Route::get('/todos/{todo}/edit', [ToDoController::class, 'edit']);

Route::put('/todos/{todo}', [ToDoController::class, 'update']);



Route::get('/diaries', [DiaryController::class, 'index']);

Route::get('/diaries/create', [DiaryController::class, 'create']);

Route::get('/diaries/{diary}', [DiaryController::class, 'show']);

Route::post('/diaries', [DiaryController::class, 'store']);

Route::get('/diaries/{diary}/edit', [DiaryController::class, 'edit']);

Route::put('/diaries/{diary}', [DiaryController::class, 'update']);
