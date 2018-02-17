<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
	protected $fillable = ['id', 'content', 'button_color'];
	public $timestamps = false;

    public function question()
    {
    	return $this->belongsToMany(Question::class);
    }
}
