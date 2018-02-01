<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'Administrator';
        $role_admin->save();

        $role_mod = new Role();
        $role_mod->name = 'Moderator';
        $role_mod->save();

        $role_contributer = new Role();
        $role_contributer->name = 'Contributor';
        $role_contributer->save();
    }
}
