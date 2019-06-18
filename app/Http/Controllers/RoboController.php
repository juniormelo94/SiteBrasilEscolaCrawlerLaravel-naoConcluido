<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes\Curl;

class RoboController extends Controller
{
    public function __construct(Curl $curl)
    {
    	// $url = 'https://brasilescola.uol.com.br/matematica/graficos.htm';

    	$curl = $this->curlmodel();
    }

    public function roboController()
    {

    	// $curl = $this->curlmodel($url);
    	// return 'Controller é um sucesso!', compact('url');
    	return 'Controller é um sucesso! {{$curl}}' ;
    	// return view('paginas.home');

    }
}
