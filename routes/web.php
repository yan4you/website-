<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/menu', function () {
    return view('menu');
});

Route::get('/servis', function () {
    return view('servis');
});

Route::get('/admin', function () {
    return view('admin');
});



Route::get('tasks', [TaskController::class, 'index']);

Route::post('create-new-tasks', [TaskController::class, 'store']);