<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserAccont extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('en_GB');

        $users = [
            [
                'id' => 1,
                'user_name' =>  $faker->username,
                'name' => $faker->name,
                'email' => "superadmin@mailinator.com", 
                'user_type' => 'admin',
                'password'=>bcrypt('qwaszx'),
                'image_url' => 'http://localhost/avatars/150-'.rand(1,10).'.jpg',
                'nip' => '123456789012345678',
                'gender' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'user_name' =>  $faker->username,
                'name' => $faker->name,
                'email' => "petugas@mailinator.com", 
                'user_type' => 'petugas',
                'password'=>bcrypt('qwaszx'),
                'image_url' => 'http://localhost/avatars/150-'.rand(1,10).'.jpg',
                'nip' => '123456789012345687',
                'gender' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        DB::table('users')->insert($users);

        DB::table('petugas')->insert(
            [
                [
                    'id' => 1,
                    'user_id' => 2,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]
            ]
        );
        DB::table('admins')->insert(
            [
                [
                    'id' => 1,
                    'user_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]
            ]
        );

    }
}
