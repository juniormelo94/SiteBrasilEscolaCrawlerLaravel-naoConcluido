<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function welcome()
    {
        return view('paginas.home');
    }

    public function teste_drive()
    {
        return view('paginas.testeDrive');
    }
}
