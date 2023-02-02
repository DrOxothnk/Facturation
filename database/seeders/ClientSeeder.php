<?php

namespace Database\Seeders;
use App\Models\Client;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $client=[
            [
            'nom_client'=>'ghassen',
            'tel'=>+'21620711090',
            'adresse'=>'hamem-sousse',
            'email'=>'ghassensta@gmail.com'
            ],
            [
            'nom_client'=>'kaisjaziri',
            'tel'=>+'+21621922206',
            'adresse'=>'monastir',
            'email'=>'kaisjz@gmail.com'
            ],
            [
            'nom_client'=>'arij',
            'tel'=>+'+21655689569',
            'adresse'=>'sahloul',
            'email'=>'arij12@gmail.com'
            ]
            ];
            Client::insert($client);
    }
}
