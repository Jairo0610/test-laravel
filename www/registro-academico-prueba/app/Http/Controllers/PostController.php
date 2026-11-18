<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts/index');
    }
    public function saludar(string $nombre){

        //compact('post');
        /*
        return view('posts/saludar', [
            'post' => $nombre
        ]);*/

        return view('posts/saludar', compact('nombre'));
    }
}
