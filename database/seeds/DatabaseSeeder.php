<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        //$this->call(RolesTableSeeder::class);
        //$this->call(CategoriesTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        //$this->call(StreaksTableSeeder::class);
        //$this->call(LustresTableSeeder::class);
        //$this->call(QuestionsTableSeeder::class);
        //$this->call(AnswersTableSeeder::class);
        //$this->call(AnswersQuestionsTableSeeder::class);
    }
}
