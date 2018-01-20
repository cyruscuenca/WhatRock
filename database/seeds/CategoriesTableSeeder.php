<?php

use Illuminate\Database\Seeder;

use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_metamorphic = new Category();
        $category_metamorphic->slug = 'metamorphic';
        $category_metamorphic->name = 'Metamorphic';
        $category_metamorphic->save();

        $category_igneous = new Category();
        $category_igneous->slug = 'igneous';
        $category_igneous->name = 'Igneous';
        $category_igneous->save();

        $category_sedimentary  = new Category();
        $category_sedimentary->slug = 'sedimentary ';
        $category_sedimentary->name = 'Sedimentary ';
        $category_sedimentary->save();
    }
}
