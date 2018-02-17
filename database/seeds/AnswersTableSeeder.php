<?php

use Illuminate\Database\Seeder;

use App\Answer;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Answer();
        $a->content = 'Yes';
        $a->button_color = '#33CC33';
        $a->save();

        $b= new Answer();
        $b->content = 'No';
        $b->button_color = '#FF0033';
        $b->save();
    }
}
