<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;
use App\Models\Subtopic;
use App\Models\Classes\Curl;
use App\Models\Classes\Regex;

class SiteBrasilEscolaCrowlerController extends Controller
{
    private $url = 'https://brasilescola.uol.com.br/matematica/graficos.html';

    public function buscar()
    {
        $curl = new Curl();
        $curl = $curl->curlClasses($this->url);

        $regex = new Regex();
        $regex = $regex->regexClasses($curl);

        foreach ($regex as $theme){
            $themes = new Theme();
            $validateDate = Theme::where('theme', $theme['tema'])->first();

            if ($validateDate){
                continue;
            }

            $idTheme = $themes->insert($theme);

            foreach ($theme['subtemas'] as $subtopic){
                $subtopics = new Subtopic();
                $subtopics->insert($subtopic, $idTheme);
            }
        }

        if(isset($subtopics)){
            $msg = 'Informações salvas com sucesso.';
            return view('paginas.testeDrive', compact('msg'));
        }
        $msg = 'Informações já existentes no banco.';
        return view('paginas.testeDrive', compact('msg'));
    }

    public function exibir()
    {
        $dataThemes = Theme::get();
        $dataSubtopics = Subtopic::get();

        if($dataSubtopics){
            return view('paginas.menu', compact('dataThemes'));
        }
    }
}
