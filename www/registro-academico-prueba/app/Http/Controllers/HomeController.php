<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return "Welmo to my page";
    }
    public function __invoke()
    {
        return view('home');
    }
}
