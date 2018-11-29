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
    { DB::table('usuarios')->insert([
        'name' => str_random(10),
        'email' => 'user'.'@gmail.com',
        'password' => bcrypt('password'),
        'role' => 'usuario',
    ]);
     DB::table('usuarios')->insert([
        'name' => str_random(10),
        'email' => 'admin'.'@gmail.com',
        'password' => bcrypt('password'),
        'role' => 'admin',
    ]);

    }
}
