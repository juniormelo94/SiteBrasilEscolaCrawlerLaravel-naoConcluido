<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes\Curl;
use App\Models\Classes\Regex;

class RoboController extends Controller
{
    // public function __construct(Curl $curl)
    // {
     	// $url = 'https://brasilescola.uol.com.br/matematica/graficos.htm';

     	// $curl = $this->curlmodel();
    // }

    public function roboController()
    {

        $url = 'https://brasilescola.uol.com.br/matematica/graficos.htm';
    	// $curl = $this->curlmodel($url);
    	// return 'Controller é um sucesso!', compact('url');
        $curl = new Curl();
        $curl = $curl->curlClasses($url);
    	// return 'Controller é um sucesso! {{$curl}}' ;

        $regex = new Regex();
        $regex = $regex->regexClasses($curl);

    	return view('paginas.home', compact('regex'));

    }
}
