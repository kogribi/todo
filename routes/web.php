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

Route::get('/todos/{todo}', [ToDoController::class, 'show']);

Route::get('/diaries', [DiaryController::class, 'index']);

Route::get('/diaries/{diary}', [DiaryController::class, 'show']);
