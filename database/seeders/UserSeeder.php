<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
            [
            'name'=>'oussema',
            'email'=>'123@gmail.com',
            'password'=>'$2y$10$pmf174KDKQwMmYGMa0iDbenKiD/uzaqj9O72WDKNv0mfOBFEkeidi'
            ],
            [
            'name'=>'sirine',
            'email'=>'1234@gmail.com',
            'password'=>'$2y$10$pmf174KDKQwMmYGMa0iDbenKiD/uzaqj9O72WDKNv0mfOBFEkeidi'
            ],
            [
            'name'=>'nader',
            'email'=>'12345@gmail.com',
            'password'=>'$2y$10$pmf174KDKQwMmYGMa0iDbenKiD/uzaqj9O72WDKNv0mfOBFEkeidi'
            ]
            ];
            User::insert($users); }
}
