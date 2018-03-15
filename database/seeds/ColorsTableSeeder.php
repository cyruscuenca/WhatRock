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
        $color_white->hex = '#fff';
        $color_white->save();

        $color_black = new Color();
        $color_black->slug = 'black';
        $color_black->name = 'Black';
        $color_black->hex = '#000';
        $color_black->save();

        $color_light_gray = new Color();
        $color_light_gray->slug = 'light-gray';
        $color_light_gray->name = 'Light Gray';
        $color_light_gray->hex = '#757575';
        $color_light_gray->save();

        $color_gray = new Color();
        $color_gray->slug = 'gray';
        $color_gray->name = 'Gray';
        $color_gray->hex = '#616161';
        $color_gray->save();

        $color_dark_gray = new Color();
        $color_dark_gray->slug = 'dark-gray';
        $color_dark_gray->name = 'Dark Gray';
        $color_dark_gray->hex = '#424242';
        $color_dark_gray->save();

        $color_light_brown = new Color();
        $color_light_brown->slug = 'light-brown';
        $color_light_brown->name = 'Light Brown';
        $color_light_brown->hex = '#6D4C41';
        $color_light_brown->save();

        $color_brown = new Color();
        $color_brown->slug = 'brown';
        $color_brown->name = 'Brown';
        $color_brown->hex = '#5D4037';
        $color_brown->save();

        $color_dark_brown = new Color();
        $color_dark_brown->slug = 'dark-brown';
        $color_dark_brown->name = 'Dark Brown';
        $color_dark_brown->hex = '#4E342E';
        $color_dark_brown->save();

        $color_light_red = new Color();
        $color_light_red->slug = 'light-red';
        $color_light_red->name = 'Light Red';
        $color_light_red->hex = '#E53935';
        $color_light_red->save();

        $color_red = new Color();
        $color_red->slug = 'red';
        $color_red->name = 'Red';
        $color_red->hex = '#D32F2F';
        $color_red->save();

        $color_dark_red = new Color();
        $color_dark_red->slug = 'dark-red';
        $color_dark_red->name = 'Red';
        $color_dark_red->hex = '#C62828';
        $color_dark_red->save();

        $color_light_orange = new Color();
        $color_light_orange->slug = 'light-orange';
        $color_light_orange->name = 'Light Orange';
        $color_light_orange->hex = '#FB8C00';
        $color_light_orange->save();

        $color_orange = new Color();
        $color_orange->slug = 'orange';
        $color_orange->name = 'Orange';
        $color_orange->hex = '#F57C00';
        $color_orange->save();

        $color_dark_orange = new Color();
        $color_dark_orange->slug = 'dark-orange';
        $color_dark_orange->name = 'Dark Orange';
        $color_dark_orange->hex = '#EF6C00';
        $color_dark_orange->save();

        $color_light_yellow = new Color();
        $color_light_yellow->slug = 'light-yellow';
        $color_light_yellow->name = 'Light Yellow';
        $color_light_yellow->hex = '#FDD835';
        $color_light_yellow->save();

        $color_yellow = new Color();
        $color_yellow->slug = 'yellow';
        $color_yellow->name = 'Yellow';
        $color_yellow->hex = '#FBC02D';
        $color_yellow->save();

        $color_dark_yellow = new Color();
        $color_dark_yellow->slug = 'dark-yellow';
        $color_dark_yellow->name = 'Dark Yellow';
        $color_dark_yellow->hex = '#F9A825';
        $color_dark_yellow->save();

        $color_light_green = new Color();
        $color_light_green->slug = 'light-green';
        $color_light_green->name = 'Light Green';
        $color_light_green->hex = '#7CB342';
        $color_light_green->save();

        $color_green = new Color();
        $color_green->slug = 'green';
        $color_green->name = 'Green';
        $color_green->hex = '#689F38';
        $color_green->save();

        $color_dark_green = new Color();
        $color_dark_green->slug = 'dark-green';
        $color_dark_green->name = 'Dark Green';
        $color_dark_green->hex = '#558B2F';
        $color_dark_green->save();

        $color_light_blue = new Color();
        $color_light_blue->slug = 'light-blue';
        $color_light_blue->name = 'Light Blue';
        $color_light_blue->hex = '#1E88E5';
        $color_light_blue->save();

        $color_blue = new Color();
        $color_blue->slug = 'blue';
        $color_blue->name = 'Blue';
        $color_blue->hex = '#1976D2';
        $color_blue->save();

        $color_dark_blue = new Color();
        $color_dark_blue->slug = 'dark-blue';
        $color_dark_blue->name = 'Dark Blue';
        $color_dark_blue->hex = '#1565C0';
        $color_dark_blue->save();

        $color_light_purple = new Color();
        $color_light_purple->slug = 'light-purple';
        $color_light_purple->name = 'Light Purple';
        $color_light_purple->hex = '#8E24AA';
        $color_light_purple->save();

        $color_purple = new Color();
        $color_purple->slug = 'purple';
        $color_purple->name = 'Purple';
        $color_purple->hex = '#7B1FA2';
        $color_purple->save();

        $color_dark_purple = new Color();
        $color_dark_purple->slug = 'dark-purple';
        $color_dark_purple->name = 'Dark Purple';
        $color_dark_purple->hex = '#6A1B9A';
        $color_dark_purple->save();
    }
}
