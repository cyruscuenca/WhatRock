<?php

use Illuminate\Database\Seeder;

use App\AnswerQuestion;

class AnswersQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new AnswerQuestion();
        $a->question_id = 1;
        $a->answer_id = 1;
        $a->save();

        $b = new AnswerQuestion();
        $b->question_id = 1;
        $b->answer_id = 2;
        $b->save();
    }
}
