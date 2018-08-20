<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\{Question, Answer, Entry, Tag};

class QuestionController extends Controller
{
    public function index()
    {
        // Fetch published entries from database.
        $entries = Entry::where('status', 2)->latest()->paginate(16);
        // $entries->category = Tag::where('type_id', 2)->pluck('name');
        $colors = Tag::where('type_id', 5)->pluck('hex');
    	  // Fetch first question from database.
        $question = Question::where('level', 1)->where('id', 1)->first();
        // Return identification view with the data it needs.
        return view('identify.index', compact('entries', 'colors', 'categories'))->with('question', $question);
    }

    public function getQuestion(Request $request)
    {
        // Define $question as requested value.
        $question =  $request->input('question');
        // Define $answer as requested value.
        $answer =  $request->input('answer');
        // Define $question_id as id column in the row which corresponds with $question.
        $question_id = Question::where('content', $question)->pluck('id');
        // Define $answer_id as id column in the row which corresponds with $answer.
        $answer_id = Answer::where('content', $answer)->pluck('id');
        // Get new question based off previous question.
        //$new_question = Question::where('parent' => $question_id, 'answer_to' => $answer_id)->first();
        $new_question = Question::where([
                                         'parent' => $question_id,
                                         'answer_to' => $answer_id,
                                          ])->first();
        // Get new answers based off $new_question.
        $new_answers = $new_question->answer->map(function ($answer){
        return ['content' => $answer->content, 'button_color' => $answer->button_color];
        });
        // Get the first tag attatched to the answer.s
        $tag = Answer::where('id', $answer_id)->first()->tag->pluck('name');
        // Define $level as level column in the row which corresponds with $question.
        // $level =  Question::where('content', $question)->pluck('level');

        return response()->json([
            'question' => $new_question->content,
            'answer' => $new_answers,
            'tag' => $tag,
        ]);
    }

    public function getEntries(Request $request)
    {
        // Define $question as requested value.
        $tags =  $request->input('tags');

        $entries = $tags;

        return response()->json([
            'entries' => $entries,
        ]);
    }
}
