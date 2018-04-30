<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\{Question, Answer, Entry, Tag};

class QuestionController extends Controller
{
    public  function index()
    {
        // fetch published entries from database
        $entries = Entry::where('status', 1)->latest()->paginate(12);

        $categories = Tag::where('type_id', 2)->pluck('name');
        $colors = Tag::where('type_id', 4)->pluck('hex');
    	  // fetch first question from database
        $question = Question::where('level', 1)->where('id', 1)->first();
        return view('identify.index', compact('entries', 'colors', 'categories'))->with('question', $question);
    }

    public function get(Request $request)
    {
        $question =  $request->input('question');
        $answer =  $request->input('answer');
        //$level =  $request->input('level');

        $newAnswer = "Answer::where('content', $answer)->pluck('id')";
        $id = "Question::where('content', $question)->pluck('id')";
        $newQuestion = "Question::where('parent', $id)->where('answer_to', $answer)->pluck('content')";

        //if (Question::where('parent', $id)->where('answer_to', $answer)->pluck('content') == NULL) {
        //    $deleteSuccess = 1;

       // } else {
        //    $deleteSuccess = 0;
       // }
        return response()->json([
            'question' => $newQuestion,
            'answer' => $newAnswer,
            //'level' => $level,
        ]);
    }
}
