<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $fillable = [
	    'theme',
	    'link_theme'
	];

	/*
	 *Insere os dados na tabela theme
	 *
	 *@params array $data
	 *
	 *@return int
	 */
	public function insert($data){
		$this->theme = $data['tema'];
		$this->link_theme = $data['link_tema'];

        if ($this->save()) {
			return $this->id;
		}

		return false;
	}
}
