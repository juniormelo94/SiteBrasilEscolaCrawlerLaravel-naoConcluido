<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;
use App\Models\Subtopic;
use App\Models\Classes\Curl;
use App\Models\Classes\Regex;

class RoboController extends Controller
{

    private $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function get_html_Controller()
    {
        $url = 'https://brasilescola.uol.com.br/matematica/graficos.htm';

        $curl = new Curl();
        $curl = $curl->curlClasses($url);

        $regex = new Regex();
        $regex = $regex->regexClasses($curl);

    	return view('paginas.home', compact('regex'));
    }

    public function insert()
    {
        $insert = $this->theme->insertGetId([
            'theme'        => 'Arte',
            'link_theme'   => 'https://artehgjrtrtygtt7j435hy6765'
        ]);

        if($insert){
            $foi = 'Inserido com sucesso!';
            return view('paginas.home', compact('foi', 'insert'));
        }
        else{
            $foi = 'Falha ao tentar inserir!';
            return view('paginas.home', compact('foi'));
        }
    }



}
