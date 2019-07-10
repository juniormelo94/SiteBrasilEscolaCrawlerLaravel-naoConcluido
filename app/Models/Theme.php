<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $fillable = [
	    'theme','link_theme'
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
		$this->save();

        return $this->id;

	}


	public function validar($data){

		$verSerExiste = $this->where('theme', $data)->get();

		return $verSerExiste;

	}


}
