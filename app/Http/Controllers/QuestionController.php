<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\{Question, Answer};

class QuestionController extends Controller
{
    public  function index()
    {
    	// fetch first question from database
    	$question = Question::where('level', 1)->first();

    	return view('entries.id')->with('question', $question);
    }

    public function getQuestion($id, $answer)
    {
		$question = Question::where('parent', $id)->where('answers', $answer)->first();

    	//$question = contents column in row where $id = parent_id AND $answer = the value in the answer column;
    	//$id = row column in row where $id = parent_id AND $answer = the vlue in the answer column;

        return view('entries.id', compact('question'));
    }
}
