<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert(
            [
                [
                    'serviceName' => 'Webdevelopment',
                    'servicePrice' => 25,
                ],
                [
                    'serviceName' => 'E-Maintenance',
                    'servicePrice' => 10,
                ],
                [
                    'serviceName' => 'E-Cleaning',
                    'servicePrice' => 5,
                ],
            ]);
    }
}
