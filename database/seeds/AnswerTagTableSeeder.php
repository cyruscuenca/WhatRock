<?php

use Illuminate\Database\Seeder;

class AnswerTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new AnswerTag();
        $a->tag_id = 1;
        $a->answer_id = 1;
        $a->save();

        $b = new AnswerTag();
        $b->tag_id = 1;
        $b->answer_id = 2;
        $b->save();
    }
}
