<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', HomeController::class);

Route::get('/post', [PostController::class, 'index']);

Route::get('/post/{nombre}', [PostController::class, 'saludar']);

//Get
//Post
//Put
//Patch
//Delete

//asignar un prefijo
Route::prefix('home')->name('home')->group(function(){
    //home.home
    //home.home2
    Route::get('/home/{nombre}', fn($nombre) => "<h1>Hola mundo, {$nombre}</h1>")->name('home');
    Route::get('/home', fn() => '<h1>Hola mundo</h1>')->name('home2');
});

Route::get('/prueba',function(){
    /*
    $post = new Post;
    $post->title = 'Título de prueba 2';
    $post->content = 'Contenido de prueba 2';
    $post->category = 'Categoria de prueba 2';

    $post->save();
    */
    
    /*
    //filtra y extrae la primera coicidencia de la db
    $post = Post::where('title', 'Título de prueba 1')->first();

    //Actualizar registro
    $post->category = 'Desarrollo web';
    $post->save();

    return $post;
    */


    /*
    //Extrae todos lo registros según la condición en orden ascendente
    //take numero de registros
    //select mostrar columnas en especifico
    $post = Post::where('id', '>=' ,'2')->orderBy('id', 'asc')->select('id', 'title')->take(2)->get();

    return $post;
    */


    $post = Post::find(1);
    $post->delete();

    return "Eliminado";

});
