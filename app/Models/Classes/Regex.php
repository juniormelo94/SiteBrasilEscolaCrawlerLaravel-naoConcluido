<?php

namespace App\Models\Classes;

class Regex
{
	public function regexClasses($html)
	{
		//Separando 'ul' que contem o menu do restante do 'html'
		preg_match_all('/<div class="menu">(.*?)<div class="publicidade-cima">/isu', $html, $ul_menu);

		//Separando as 'li' que contem os temas da 'ul' menu.
		preg_match_all('/">(:?.*?)href="(.*?)"(:?.*?)">(.*?)<\/a>(:?.*?)"sub">(.*?)<\/ul>/isu', $ul_menu, $li_tema);


		return $li_tema;
	}
}
