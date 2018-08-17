<?php

use Illuminate\Database\Seeder;

use App\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $type_category = new Type();
        $type_category->name = 'Category';
        $type_category->save();

        $type_color = new Type();
        $type_color->name = 'Lustre';
        $type_color->save();

        $type_color = new Type();
        $type_color->name = 'Streak';
        $type_color->save();

        $type_color = new Type();
        $type_color->name = 'Color';
        $type_color->save();

        $type_color = new Type();
        $type_color->name = 'Hardness';
        $type_color->save();

        $type_color = new Type();
        $type_color->name = 'Cleavage and fracture';
        $type_color->save();

        $type_color = new Type();
        $type_color->name = 'Crystal structure';
        $type_color->save();

        $type_category = new Type();
        $type_category->name = 'Miscellaneous';
        $type_category->save();

    }
}
