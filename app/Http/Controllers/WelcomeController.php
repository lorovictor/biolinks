<?php

namespace App\Http\Controllers;

class WelcomeController 
{
    public function __invoke()
    {
        //return 'Hello, World!';
        return view('welcome'); // Assuming a welcome.blade.php view exists in your views directory
    }
}