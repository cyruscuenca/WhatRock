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
        $answer = new Answer();
        $answer->content = 'Yes';
        $answer->button_color = '#2CBD4E';
        $answer->save();
        $answer->question()->sync([1]);

        $answer = new Answer();
        $answer->content = 'No';
        $answer->button_color = '#e80b37';
        $answer->save();
        $answer->question()->sync([1]);

        $answer = new Answer();
        $answer->content = 'Big';
        $answer->button_color = '#e80b37';
        $answer->save();
        $answer->question()->sync([2]);

        $answer = new Answer();
        $answer->content = 'Small';
        $answer->button_color = '#e80b37';
        $answer->save();
        $answer->question()->sync([2]);
        $answer->tag()->sync([1]);

        $answer = new Answer();
        $answer->content = 'Yes';
        $answer->button_color = '#2CBD4E';
        $answer->save();
        $answer->question()->sync([3]);

        $answer = new Answer();
        $answer->content = 'No';
        $answer->button_color = '#e80b37';
        $answer->save();
        $answer->question()->sync([3]);

        $answer = new Answer();
        $answer->content = 'Yes';
        $answer->button_color = '#2CBD4E';
        $answer->save();
        $answer->question()->sync([4]);

        $answer = new Answer();
        $answer->content = 'No';
        $answer->button_color = '#e80b37';
        $answer->save();
        $answer->question()->sync([4]);

        $answer = new Answer();
        $answer->content = 'Yes';
        $answer->button_color = '#2CBD4E';
        $answer->save();
        $answer->question()->sync([5]);

        $answer = new Answer();
        $answer->content = 'No';
        $answer->button_color = '#e80b37';
        $answer->save();
        $answer->question()->sync([5]);

        $answer = new Answer();
        $answer->content = 'Yes';
        $answer->button_color = '#2CBD4E';
        $answer->save();
        $answer->question()->sync([6]);

        $answer = new Answer();
        $answer->content = 'No';
        $answer->button_color = '#e80b37';
        $answer->save();
        $answer->question()->sync([6]);
    }
}
