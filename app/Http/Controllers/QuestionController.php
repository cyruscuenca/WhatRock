<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\{Question, Answer, Entry};

class QuestionController extends Controller
{
    public  function index()
    {
        // fetch published entries from database
        $entries = Entry::where('status', 1)->latest()->paginate(12);

    	// fetch first question from database
    	$question = Question::where('level', 1)->first();

    	return view('entries.id')->with('question', $question)->with('entries', $entries);
    }

    public function get(Request $request)
    {
        $question = $request->question;
        $answer = $request->answer;
        $id = Question::where('content', $question)->first()->pluck('id');

		$newQuestion = Question::where('parent', $id)->where('answer_to', $answer)->first();

        return response()->json([
        'question' => $newQuestion,
        ]);
    }
}
