<?php

use Illuminate\Database\Seeder;

use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Misc Tags
        $fine_grained = new Tag();
        $fine_grained->name = 'Fine Grained';
        $fine_grained->type_id = '1';
        $fine_grained->save();

        //Category
        $category_metamorphic = new Tag();
        $category_metamorphic->name = 'Metamorphic';
        $category_metamorphic->type_id = '2';
        $category_metamorphic->save();

        $category_igneous = new Tag();
        $category_igneous->name = 'Igneous';
        $category_igneous->type_id = '2';
        $category_igneous->save();

        $category_sedimentary  = new Tag();
        $category_sedimentary->name = 'Sedimentary ';
        $category_sedimentary->type_id = '2';
        $category_sedimentary->save();

        $category_mineral  = new Tag();
        $category_mineral->name = 'Mineral ';
        $category_mineral->type_id = '2';
        $category_mineral->save();

        //Lustre
        $lustre_dull = new Tag();
        $lustre_dull->name = 'Dull';
        $lustre_dull->type_id = '3';
        $lustre_dull->save();

        $lustre_greasy = new Tag();
        $lustre_greasy->name = 'Greasy';
        $lustre_greasy->type_id = '3';
        $lustre_greasy->save();

        $lustre_metallic  = new Tag();
        $lustre_metallic->name = 'Metallic ';
        $lustre_metallic->type_id = '3';
        $lustre_metallic->save();

        $lustre_pearly  = new Tag();
        $lustre_pearly->name = 'Pearly ';
        $lustre_pearly->type_id = '3';
        $lustre_pearly->save();

        $lustre_vitreous = new Tag();
        $lustre_vitreous->name = 'Vitreous ';
        $lustre_vitreous->type_id = '3';
        $lustre_vitreous->save();

        $lustre_waxy = new Tag();
        $lustre_waxy->name = 'Waxy ';
        $lustre_waxy->type_id = '3';
        $lustre_waxy->save();

        $lustre_adamantine  = new Tag();
        $lustre_adamantine->name = 'Adamantine ';
        $lustre_adamantine->type_id = '3';
        $lustre_adamantine->save();

        //Streak
        $streak_white = new Tag();
        $streak_white->name = 'White';
        $streak_white->type_id = '4';
        $streak_white->save();

        $streak_black = new Tag();
        $streak_black->name = 'Black';
        $streak_black->type_id = '4';
        $streak_black->save();

        $streak_light_gray = new Tag();
        $streak_light_gray->name = 'Light Gray';
        $streak_light_gray->type_id = '4';
        $streak_light_gray->save();

        $streak_gray = new Tag();
        $streak_gray->name = 'Gray';
        $streak_gray->type_id = '4';
        $streak_gray->save();

        $streak_dark_gray = new Tag();
        $streak_dark_gray->name = 'Dark Gray';
        $streak_dark_gray->type_id = '4';
        $streak_dark_gray->save();

        $streak_light_brown = new Tag();
        $streak_light_brown->name = 'Light Brown';
        $streak_light_brown->type_id = '4';
        $streak_light_brown->save();

        $streak_brown = new Tag();
        $streak_brown->name = 'Brown';
        $streak_brown->type_id = '4';
        $streak_brown->save();

        $streak_dark_brown = new Tag();
        $streak_dark_brown->name = 'Dark Brown';
        $streak_dark_brown->type_id = '4';
        $streak_dark_brown->save();

        $streak_red = new Tag();
        $streak_red->name = 'Red';
        $streak_red->type_id = '4';
        $streak_red->save();

        $streak_orange = new Tag();
        $streak_orange->name = 'Orange';
        $streak_orange->type_id = '4';
        $streak_orange->save();

        $streak_yellow = new Tag();
        $streak_yellow->name = 'Yellow';
        $streak_yellow->type_id = '4';
        $streak_yellow->save();

        $streak_green = new Tag();
        $streak_green->name = 'Green';
        $streak_green->type_id = '4';
        $streak_green->save();

        $streak_blue = new Tag();
        $streak_blue->name = 'Blue';
        $streak_blue->type_id = '4';
        $streak_blue->save();

        $streak_purple = new Tag();
        $streak_purple->name = 'Purple';
        $streak_purple->type_id = '4';
        $streak_purple->save();

        //Color
        $color_white = new Tag();
        $color_white->name = 'White';
        $color_white->hex = '#fff';
        $color_white->type_id = '5';
        $color_white->save();

        $color_black = new Tag();
        $color_black->name = 'Black';
        $color_black->hex = '#000';
        $color_black->type_id = '5';
        $color_black->save();

        $color_light_gray = new Tag();
        $color_light_gray->name = 'Light Gray';
        $color_light_gray->hex = '#757575';
        $color_light_gray->type_id = '5';
        $color_light_gray->save();

        $color_gray = new Tag();
        $color_gray->name = 'Gray';
        $color_gray->hex = '#616161';
        $color_gray->type_id = '5';
        $color_gray->save();

        $color_dark_gray = new Tag();
        $color_dark_gray->name = 'Dark Gray';
        $color_dark_gray->hex = '#424242';
        $color_dark_gray->type_id = '5';
        $color_dark_gray->save();

        $color_light_brown = new Tag();
        $color_light_brown->name = 'Light Brown';
        $color_light_brown->hex = '#6D4C41';
        $color_light_brown->type_id = '5';
        $color_light_brown->save();

        $color_brown = new Tag();
        $color_brown->name = 'Brown';
        $color_brown->hex = '#5D4037';
        $color_brown->type_id = '5';
        $color_brown->save();

        $color_dark_brown = new Tag();
        $color_dark_brown->name = 'Dark Brown';
        $color_dark_brown->hex = '#4E342E';
        $color_dark_brown->type_id = '5';
        $color_dark_brown->save();

        $color_light_red = new Tag();
        $color_light_red->name = 'Light Red';
        $color_light_red->hex = '#E53935';
        $color_light_red->type_id = '5';
        $color_light_red->save();

        $color_red = new Tag();
        $color_red->name = 'Red';
        $color_red->hex = '#D32F2F';
        $color_red->type_id = '5';
        $color_red->save();

        $color_dark_red = new Tag();
        $color_dark_red->name = 'Red';
        $color_dark_red->hex = '#C62828';
        $color_dark_red->type_id = '5';
        $color_dark_red->save();

        $color_light_orange = new Tag();
        $color_light_orange->name = 'Light Orange';
        $color_light_orange->hex = '#FB8C00';
        $color_light_orange->type_id = '5';
        $color_light_orange->save();

        $color_orange = new Tag();
        $color_orange->name = 'Orange';
        $color_orange->hex = '#F57C00';
        $color_orange->type_id = '5';
        $color_orange->save();

        $color_dark_orange = new Tag();
        $color_dark_orange->name = 'Dark Orange';
        $color_dark_orange->hex = '#EF6C00';
        $color_dark_orange->type_id = '5';
        $color_dark_orange->save();

        $color_light_yellow = new Tag();
        $color_light_yellow->name = 'Light Yellow';
        $color_light_yellow->hex = '#FDD835';
        $color_light_yellow->type_id = '5';
        $color_light_yellow->save();

        $color_yellow = new Tag();
        $color_yellow->name = 'Yellow';
        $color_yellow->hex = '#FBC02D';
        $color_yellow->type_id = '5';
        $color_yellow->save();

        $color_dark_yellow = new Tag();
        $color_dark_yellow->name = 'Dark Yellow';
        $color_dark_yellow->hex = '#F9A825';
        $color_dark_yellow->type_id = '5';
        $color_dark_yellow->save();

        $color_light_green = new Tag();
        $color_light_green->name = 'Light Green';
        $color_light_green->hex = '#7CB342';
        $color_light_green->type_id = '5';
        $color_light_green->save();

        $color_green = new Tag();
        $color_green->name = 'Green';
        $color_green->hex = '#689F38';
        $color_green->type_id = '5';
        $color_green->save();

        $color_dark_green = new Tag();
        $color_dark_green->name = 'Dark Green';
        $color_dark_green->hex = '#558B2F';
        $color_dark_green->type_id = '5';
        $color_dark_green->save();

        $color_light_blue = new Tag();
        $color_light_blue->name = 'Light Blue';
        $color_light_blue->hex = '#1E88E5';
        $color_light_blue->type_id = '5';
        $color_light_blue->save();

        $color_blue = new Tag();
        $color_blue->name = 'Blue';
        $color_blue->hex = '#1976D2';
        $color_blue->type_id = '5';
        $color_blue->save();

        $color_dark_blue = new Tag();
        $color_dark_blue->name = 'Dark Blue';
        $color_dark_blue->hex = '#1565C0';
        $color_dark_blue->type_id = '5';
        $color_dark_blue->save();

        $color_light_purple = new Tag();
        $color_light_purple->name = 'Light Purple';
        $color_light_purple->hex = '#8E24AA';
        $color_light_purple->type_id = '5';
        $color_light_purple->save();

        $color_purple = new Tag();
        $color_purple->name = 'Purple';
        $color_purple->hex = '#7B1FA2';
        $color_purple->type_id = '5';
        $color_purple->save();

        $color_dark_purple = new Tag();
        $color_dark_purple->name = 'Dark Purple';
        $color_dark_purple->hex = '#6A1B9A';
        $color_dark_purple->type_id = '5';
        $color_dark_purple->save();

        //Hardness
        $hardness_1 = new Tag();
        $hardness_1->name = '1';
        $hardness_1->type_id = '6';
        $hardness_1->save();

        $hardness_2 = new Tag();
        $hardness_2->name = '2';
        $hardness_2->type_id = '6';
        $hardness_2->save();

        $hardness_3 = new Tag();
        $hardness_3->name = '3';
        $hardness_3->type_id = '6';
        $hardness_3->save();

        $hardness_4 = new Tag();
        $hardness_4->name = '4';
        $hardness_4->type_id = '6';
        $hardness_4->save();

        $hardness_5 = new Tag();
        $hardness_5->name = '5';
        $hardness_5->type_id = '6';
        $hardness_5->save();

        $hardness_6 = new Tag();
        $hardness_6->name = '6';
        $hardness_6->type_id = '6';
        $hardness_6->save();

        $hardness_7 = new Tag();
        $hardness_7->name = '7';
        $hardness_7->type_id = '6';
        $hardness_7->save();

        $hardness_8 = new Tag();
        $hardness_8->name = '8';
        $hardness_8->type_id = '6';
        $hardness_8->save();

        $hardness_9 = new Tag();
        $hardness_9->name = '9';
        $hardness_9->type_id = '6';
        $hardness_9->save();

        $hardness_10 = new Tag();
        $hardness_10->name = '10';
        $hardness_10->type_id = '6';
        $hardness_10->save();

        //Cleavage and fracture
        $hardness_10 = new Tag();
        $hardness_10->name = '10';
        $hardness_10->type_id = '6';
        $hardness_10->save();        

        //answer_tag pivot table connections

        //$category_igneous->answer()->save(new Answer(['columns' => 'values']));
    }
}
