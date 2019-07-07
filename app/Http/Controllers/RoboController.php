<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;
use App\Models\Subtopic;
use App\Models\Classes\Curl;
use App\Models\Classes\Regex;

class RoboController extends Controller
{


    public function welcome()
    {
        return view('paginas.home');
    }


    public function teste_drive()
    {
        return view('paginas.testeDrive');
    }


    public function buscar()
    {
        $url = 'https://brasilescola.uol.com.br/matematica/graficos.htm';

        $curl = new Curl();
        $curl = $curl->curlClasses($url);

        $regex = new Regex();
        $regex = $regex->regexClasses($curl);

    	return view('paginas.testeDrive', compact('regex'));
    }


    public function salvar()
    {
        $themes = new Theme();
        $subtopics = new Subtopic();

            foreach ($regex as $key => $temas) {

            $themes->theme = $temas[$key]['tema'];
            $themes->link_theme = $temas[$key]['link_tema'];
            $themes->save();
            $themes_id = $themes->id;

            foreach ($temas[$key] as $key => $subtemas) {
                
                $subtopics->id_theme = $themes_id;
                $subtopics->subtopic = $subtemas[$key]['subtema'];
                $subtopics->link_subtopic = $subtemas[$key]['link_subtema'];

            }


        }



        if($subtopics){
            $foi = 'Inserido com sucesso!';
            return view('paginas.testeDrive', compact('foi', 'themes_id'));
        }
        else{
            $foi = 'Falha ao tentar inserir!';
            return view('paginas.testeDrive', compact('foi'));
        }
    }




}
