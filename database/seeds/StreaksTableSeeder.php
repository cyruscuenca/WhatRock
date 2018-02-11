<?php

use Illuminate\Database\Seeder;

use App\Streak;

class StreaksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $streak_white = new Streak();
        $streak_white->slug = 'white';
        $streak_white->name = 'White';
        $streak_white->save();

        $streak_black = new Streak();
        $streak_black->slug = 'black';
        $streak_black->name = 'Black';
        $streak_black->save();

        $streak_light_gray = new Streak();
        $streak_light_gray->slug = 'light-gray';
        $streak_light_gray->name = 'Light Gray';
        $streak_light_gray->save();

        $streak_gray = new Streak();
        $streak_gray->slug = 'gray';
        $streak_gray->name = 'Gray';
        $streak_gray->save();

        $streak_dark_gray = new Streak();
        $streak_dark_gray->slug = 'dark-gray';
        $streak_dark_gray->name = 'Dark Gray';
        $streak_dark_gray->save();

        $streak_light_brown = new Streak();
        $streak_light_brown->slug = 'light-brown';
        $streak_light_brown->name = 'Light Brown';
        $streak_light_brown->save();

        $streak_brown = new Streak();
        $streak_brown->slug = 'brown';
        $streak_brown->name = 'Brown';
        $streak_brown->save();

        $streak_dark_brown = new Streak();
        $streak_dark_brown->slug = 'dark-brown';
        $streak_dark_brown->name = 'Dark Brown';
        $streak_dark_brown->save();

        $streak_red = new Streak();
        $streak_red->slug = 'red';
        $streak_red->name = 'Red';
        $streak_red->save();

        $streak_orange = new Streak();
        $streak_orange->slug = 'orange';
        $streak_orange->name = 'Orange';
        $streak_orange->save();

        $streak_yellow = new Streak();
        $streak_yellow->slug = 'yellow';
        $streak_yellow->name = 'Yellow';
        $streak_yellow->save();

        $streak_green = new Streak();
        $streak_green->slug = 'green';
        $streak_green->name = 'Green';
        $streak_green->save();

        $streak_blue = new Streak();
        $streak_blue->slug = 'blue';
        $streak_blue->name = 'Blue';
        $streak_blue->save();

        $streak_purple = new Streak();
        $streak_purple->slug = 'purple';
        $streak_purple->name = 'Purple';
        $streak_purple->save();
    }
}
