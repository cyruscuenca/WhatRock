<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
	protected $fillable = ['id', 'question_id', 'answer_id'];

    public function question()
    {
    	return $this->belongsToMany(Question::class);
    }
}
