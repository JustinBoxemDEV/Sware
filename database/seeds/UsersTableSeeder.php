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
        DB::table('users')->insert(
            [
                [
                    'name' => 'Justin Boxem',
                    'email' => 'nensie1998@gmail.com',
                    'password' => '$2y$10$n6R8A7GpH1SctBm5.pqxduxgiVQ8kX3ryMBmGraweCQqbT86D9yrS',
                ],
            ]);
    }
}
