<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerQuestion extends Model
{
	protected $fillable = ['id', 'question_id', 'answer_id'];
	public $timestamps = false;
  	protected $table = 'answer_question';

}