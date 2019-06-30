<?php

namespace App\Models\Classes;

class Regex
{
	public function regexClasses($html)
	{
		//Separando 'ul' que contem o menu do restante do 'html'
		preg_match_all('/<div class="menu">(.*?)<div class="publicidade-cima">/isu', $html, $ul_menu);

		//Separando as 'li' que contem os temas da 'ul' menu.
		preg_match_all('/<li(:?.*?)href="(.*?)"(:?.*?)">(.*?)<\/a>(:?.*?)<ul class="sub">(.*?)<\/ul>/isu', $ul_menu[1][0], $li_tema);

		// echo "<pre>";
		// print_r($li_tema[6]);
		// exit();

		$menu = [];

		foreach ($li_tema[6] as $key => $value) {

			//Separando os subtemas de cada 'li' tema.
			preg_match_all('/<li>(:?.*?)href="(.*?)"(:?.*?)>(.*?)<\/a>/isu', $li_tema[6][$key], $subtemas);

			$subtemas_array = [];

			foreach ($subtemas[2] as $k => $subtema_link) {

				$subtemas_array[] = 
					[
						'subtema' => str_replace(array("\t", "\n"), '', $subtemas[4][$k]), 
						'link_subtema' => $subtema_link
					];

			}

			$menu[] = 
				[
					'tema' => $li_tema[4][$key],
					'link_tema' => $li_tema[2][$key],
					'subtemas' => $subtemas_array
				];

		}


		return $menu;
	}
}
