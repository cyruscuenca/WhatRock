<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\{Question, Answer, Entry, Color};

class QuestionController extends Controller
{
    public  function index()
    {
        // fetch published entries from database
        $entries = Entry::where('status', 1)->latest()->paginate(1);

    	// fetch first question from database
    	$question = Question::where('level', 1)->first();

        //$colors = $entries->colors->pluck('hex');

    	return view('entries.id', compact('entries'))->with('question', $question);
    }

    public function get(Request $request)
    {
        $question = $request->answer;
        
        /*
        $answer = $request->answer;
        $id = Question::where('content', $question)->first()->pluck('id');
		$newQuestion = Question::where('parent', $id)->where('answer_to', $answer)->pluck('content');
        */
        $newQuestion = $question;

        return response()->json([
        'question' => $newQuestion,
        ]);
    }
}
