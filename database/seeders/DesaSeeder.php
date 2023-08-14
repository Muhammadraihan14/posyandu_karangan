<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create('en_GB');

        $desa = [
            [
                'id' => 1,
                'name' => 'Karangan',
                'latitude' => "0.5577633441311441", 
                'longitude' => "109.37475899616982", 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => 'Mentonyek',
                'latitude' => "0.5867126152048606", 
                'longitude' => "109.3752504983384", 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        DB::table('desas')->insert($desa);
    }
}

