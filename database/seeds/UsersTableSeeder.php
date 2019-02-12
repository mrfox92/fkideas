<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 2)->create();

        App\User::create([
            'name'      => 'fkideas',
            'email'     => 'fkideas@gmail.com',
            'password'  => bcrypt('fkideas123')
        ]);

        Role::create([
            'name'      => 'Admin',
            'slug'      => 'admin',
            'special'   => 'all-access'
        ]);
    }
}
