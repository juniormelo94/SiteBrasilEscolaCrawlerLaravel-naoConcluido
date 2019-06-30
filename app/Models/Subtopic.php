<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subtopic extends Model
{
    protected $fillable = [
	    'id_theme', 'subtopic', 'link_subtopic'
	];
}
