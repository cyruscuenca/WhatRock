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
        $fine_grained = new Tag();
        $fine_grained->content = 'Fine Grained';
        $fine_grained->save();

        $soapy = new Tag();
        $soapy->content = 'Soapy';
        $soapy->save();
    }
}
