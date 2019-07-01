<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;
use App\Models\Subtopic;
use App\Models\Classes\Curl;
use App\Models\Classes\Regex;

class RoboController extends Controller
{


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
        $themes = new Theme();
        $themes->theme = 'Arte';
        $themes->link_theme = 'https://artehgjrtrtygtt7j435hy6765';
        $themes->save();
        $themes_id = $themes->id;

        $subtopics = new Subtopic();
        $subtopics->id_theme = $themes_id;
        $subtopics->subtopic = 'historia da arte';
        $subtopics->link_subtopic = 'https://artehgjrtrtygtt7j435hy6765';
        $subtopics->save();

        if($subtopics){
            $foi = 'Inserido com sucesso!';
            return view('paginas.home', compact('foi', 'themes_id'));
        }
        else{
            $foi = 'Falha ao tentar inserir!';
            return view('paginas.home', compact('foi'));
        }
    }




}
