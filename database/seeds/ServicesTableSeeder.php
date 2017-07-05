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
                    'servicePriceSolo' => 25,
                    'servicePriceMulti' => 20,
                    'servicePriceMembership' => 0,
                ],
                [
                    'serviceName' => 'E-Maintenance',
                    'servicePriceSolo' => 10,
                    'servicePriceMulti' => 8,
                    'servicePriceMembership' => 0,
                ],
                [
                    'serviceName' => 'E-Cleaning',
                    'servicePriceSolo' => 5,
                    'servicePriceMulti' => 4,
                    'servicePriceMembership' => 0,
                ],
                [
                    'serviceName' => 'Sware Lidmaatschap',
                    'servicePriceSolo' => 0,
                    'servicePriceMulti' => 0,
                    'servicePriceMembership' => 25,
                ],
            ]);
    }
}
