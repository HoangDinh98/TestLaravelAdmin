<?php

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
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => str_random(5),
                'email' => 'email'. (string) $i . '@gmail.com',
                'password' => rand(0, 9),
            ]);
        }

    }
}
