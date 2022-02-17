<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Se ejecuta cuando se usa esta URL
    public function __invoke()
    {
        return view('home');
    }
}
