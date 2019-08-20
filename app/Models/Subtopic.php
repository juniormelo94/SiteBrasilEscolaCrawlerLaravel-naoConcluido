<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subtopic extends Model
{
    protected $fillable = [
	    'theme_id',
	    'subtopic',
	    'link_subtopic'
	];

	/*
	 *Insere os dados na tabela Subtopic
	 *
	 *@params array $data
	 *@params int $idTheme
	 *
	 *@return boolean
	 */
	public function insert($data, $idTheme)
	{
		$this->theme_id = $idTheme;
		$this->subtopic = $data['subtema'];
		$this->link_subtopic = $data['link_subtema'];

		if ($this->save()) {
			return true;
		}

		return false;
	}


}
