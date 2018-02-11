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
        $color_white = new Color();
        $color_white->slug = 'white';
        $color_white->name = 'White';
        $color_white->save();

        $color_black = new Color();
        $color_black->slug = 'black';
        $color_black->name = 'Black';
        $color_black->save();

        $color_light_gray = new Color();
        $color_light_gray->slug = 'light-gray';
        $color_light_gray->name = 'Light Gray';
        $color_light_gray->save();

        $color_gray = new Color();
        $color_gray->slug = 'gray';
        $color_gray->name = 'Gray';
        $color_gray->save();

        $color_dark_gray = new Color();
        $color_dark_gray->slug = 'dark-gray';
        $color_dark_gray->name = 'Dark Gray';
        $color_dark_gray->save();

        $color_light_brown = new Color();
        $color_light_brown->slug = 'light-brown';
        $color_light_brown->name = 'Light Brown';
        $color_light_brown->save();

        $color_brown = new Color();
        $color_brown->slug = 'brown';
        $color_brown->name = 'Brown';
        $color_brown->save();

        $color_dark_brown = new Color();
        $color_dark_brown->slug = 'dark-brown';
        $color_dark_brown->name = 'Dark Brown';
        $color_dark_brown->save();

        $color_red = new Color();
        $color_red->slug = 'red';
        $color_red->name = 'Red';
        $color_red->save();

        $color_orange = new Color();
        $color_orange->slug = 'orange';
        $color_orange->name = 'Orange';
        $color_orange->save();

        $color_yellow = new Color();
        $color_yellow->slug = 'yellow';
        $color_yellow->name = 'Yellow';
        $color_yellow->save();

        $color_green = new Color();
        $color_green->slug = 'green';
        $color_green->name = 'Green';
        $color_green->save();

        $color_blue = new Color();
        $color_blue->slug = 'blue';
        $color_blue->name = 'Blue';
        $color_blue->save();

        $color_purple = new Color();
        $color_purple->slug = 'purple';
        $color_purple->name = 'Purple';
        $color_purple->save();
    }
}
