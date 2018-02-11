<?php

use Illuminate\Database\Seeder;

use App\Color;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $color_white = new Streak();
        $color_white->slug = 'white';
        $color_white->name = 'White';
        $color_white->save();

        $color_black = new Streak();
        $color_black->slug = 'black';
        $color_black->name = 'Black';
        $color_black->save();

        $color_light_gray = new Streak();
        $color_light_gray->slug = 'light-gray';
        $color_light_gray->name = 'Light Gray';
        $color_light_gray->save();

        $color_gray = new Streak();
        $color_gray->slug = 'gray';
        $color_gray->name = 'Gray';
        $color_gray->save();

        $color_dark_gray = new Streak();
        $color_dark_gray->slug = 'dark-gray';
        $color_dark_gray->name = 'Dark Gray';
        $color_dark_gray->save();

        $color_light_brown = new Streak();
        $color_light_brown->slug = 'light-brown';
        $color_light_brown->name = 'Light Brown';
        $color_light_brown->save();

        $color_brown = new Streak();
        $color_brown->slug = 'brown';
        $color_brown->name = 'Brown';
        $color_brown->save();

        $color_dark_brown = new Streak();
        $color_dark_brown->slug = 'dark-brown';
        $color_dark_brown->name = 'Dark Brown';
        $color_dark_brown->save();

        $color_red = new Streak();
        $color_red->slug = 'red';
        $color_red->name = 'Red';
        $color_red->save();

        $color_orange = new Streak();
        $color_orange->slug = 'orange';
        $color_orange->name = 'Orange';
        $color_orange->save();

        $color_yellow = new Streak();
        $color_yellow->slug = 'yellow';
        $color_yellow->name = 'Yellow';
        $color_yellow->save();

        $color_green = new Streak();
        $color_green->slug = 'green';
        $color_green->name = 'Green';
        $color_green->save();

        $color_blue = new Streak();
        $color_blue->slug = 'blue';
        $color_blue->name = 'Blue';
        $color_blue->save();

        $color_purple = new Streak();
        $color_purple->slug = 'purple';
        $color_purple->name = 'Purple';
        $color_purple->save();
    }
}
