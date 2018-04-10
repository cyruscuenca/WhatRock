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
            $a->level = 1;
            $a->content = 'Does the rock have grains?';
            $a->save();

            $d = new Question();
            $d->parent = 1;
            $d->level = 2;
            $d->answer_to = 1;
            $d->content = 'Are the grains big or small?';
            $d->save();

            $b = new Question();
            $b->parent = 2;
            $b->level = 3;
            $b->answer_to = 1;
            $b->content = 'Are the grains crystals?';
            $b->save();

            $g = new Question();
            $g->level = 1;
            $g->content = 'Is the rock layered?';
            $g->save();

            $e = new Question();
            $e->level = 1;
            $e->content = 'Can you scratch it with your fingernail?';
            $e->save();

            $h = new Question();
            $h->parent = 6;
            $h->level = 2;
            $h->answer_to = 2;
            $h->content = 'Can the rock scratch glass?';
            $h->save();

            $f = new Question();
            $f->level = 1;
            $f->content = 'What is it\'s texture like?';
            $f->save();

            $g = new Question();
            $g->level = 1;
            $g->content = 'Does the rock have gas bubbles in it?';
            $g->save();

            $h = new Question();
            $h->level = 1;
            $h->content = 'Does the rock react with hydrochloric acid?';
            $h->save();
    }
}
