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
        //$this->call(TagsTableSeeder::class);
        //$this->call(TypesTableSeeder::class);
        //$this->call(QuestionsTableSeeder::class);
        $this->call(AnswersTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
        //$this->call(RolesTableSeeder::class);
        //$this->call(AnswersQuestionsTableSeeder::class);
    }
}
