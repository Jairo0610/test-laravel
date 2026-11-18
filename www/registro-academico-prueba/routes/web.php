<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', HomeController::class);

Route::get('/post', [PostController::class, 'index']);

Route::get('/post/{nombre}', [PostController::class, 'saludar']);

//asignar un prefijo
Route::prefix('home')->name('home')->group(function(){
    //home.home
    //home.home2
    Route::get('/home/{nombre}', fn($nombre) => "<h1>Hola mundo, {$nombre}</h1>")->name('home');
    Route::get('/home', fn() => '<h1>Hola mundo</h1>')->name('home2');
});


