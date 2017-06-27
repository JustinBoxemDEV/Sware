<?php

use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert(
            [
                [
                    'packageName' => 'Solo Pakket',                        
                ],
                [
                    'packageName' => 'Multi Pakket',                        
                ],
            ]);
    }
}
