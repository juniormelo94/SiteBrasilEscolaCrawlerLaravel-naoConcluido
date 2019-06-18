<?php

namespace App\Models\Classes;

use Illuminate\Database\Eloquent\Model;

class Curl extends Model
{
	public curlmodel()
	{
		$um = 1;
		$dois = 2;
		$resultado = $um . $dois;
		return $resultado;
	}
}
