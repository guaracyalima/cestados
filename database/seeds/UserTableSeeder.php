<?php

use CEstados\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)->create();

        factory(User::class)->create([
            'name' => 'User Common',
            'email' => 'user@user.com',
            'password' => bcrypt(123456)
        ]);

        factory(User::class)->create([
            'name' => 'Admin root',
            'email' => 'root@user.com',
            'password' => bcrypt(123456),
            'role' => 'admin'
        ]);

    }
}
