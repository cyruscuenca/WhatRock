<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = ['id', 'parent', 'level', 'answer_to', 'content'];
	public $timestamps = false;

    public function answer()
    {
    	return $this->belongsToMany(Answer::class);
    }

}
