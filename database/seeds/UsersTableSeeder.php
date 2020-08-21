<?php


use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@technodac.com';
        $user->password = '$2y$10$XN.rnLk7vNYkYNB1wtfH/ez/7yt4WoWAC7LGOwISh3lfi83HxJJ6u';
        $user->save();


        $role = Role::create([
            'name' => 'admin',
            'display_name' => 'Administrador',
            'description' => 'Administrador'
        ]);

        $user->roles()->save($role);



    }
}
