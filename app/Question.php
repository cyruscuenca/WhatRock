<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = ['id', 'parent', 'level', 'answer', 'content'];
	public $timestamps = false;
}
