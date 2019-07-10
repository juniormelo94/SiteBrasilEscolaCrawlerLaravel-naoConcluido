<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;
use App\Models\Subtopic;
use App\Models\Classes\Curl;
use App\Models\Classes\Regex;

class SiteBrasilEscolaCrowlerController extends Controller
{
    private $url = 'https://brasilescola.uol.com.br/matematica/graficos.htm';

    public function buscar()
    {

        $curl = new Curl();
        $curl = $curl->curlClasses($this->url);

        $regex = new Regex();
        $regex = $regex->regexClasses($curl);

        foreach ($regex as $theme) {

            $themes = new Theme();
            $validateDate = $themes->validar($theme['tema']);


            if (empty($validateData)){
                continue;
            }

            $idTheme = $themes->insert($theme);

            foreach ($theme['subtemas'] as $subtopic) {

                $subtopics = new Subtopic();
                $subtopics->insert($subtopic, $idTheme);

            }

        }


        if($validateDate){
            $msg = 'Inserido com sucesso!';
            return view('paginas.testeDrive', compact('msg'));
        }
        else{
            $msg = 'Falha ao tentar inserir!';
            return view('paginas.testeDrive', compact('msg'));
        }

    }



}
