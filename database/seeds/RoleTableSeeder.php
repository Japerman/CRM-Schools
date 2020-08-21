<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        /* $role = new Role();
        $role->name = 'admin';
        $role->display_name = 'Administrator';
        $role->description = 'Administrator';
        $role->save(); */

        $role = new Role();
        $role->name = 'user';
        $role->display_name = 'User';
        $role->description = 'User';
        $role->save();
    }
}
