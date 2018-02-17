<?php

use Illuminate\Database\Seeder;

use App\Question;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $a = new Question();
            //$a->parent = 1;
            $a->level = 1;
            //$a->answer_to = 1;
            $a->content = 'Is it one color?';
            $a->save();

            $b = new Question();
            $b->parent = 1;
            $b->level = 2;
            $b->answer_to = 1;
            $b->content = 'What color is it?';
            $b->save();

            $c = new Question();
            $c->parent = 1;
            $c->level = 2;
            $c->answer_to = 2;
            $c->content = 'Is it made up of different color rocks?';
            $c->save();

            $d = new Question();
            $d->parent = 3;
            $d->level = 3;
            $d->answer_to = 1;
            $d->content = 'Are the rocks big or small?';
            $d->save();

    }
}
