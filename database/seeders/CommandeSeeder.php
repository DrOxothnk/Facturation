<?php

namespace Database\Seeders;

use App\Models\Commande;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $commande=[
            [
            'date'=>'2023-01-15',
            'total'=>9.6

            ],
            [
                'date'=>'2023-01-16',
                'total'=>11.9
            ],
            [
                'date'=>'2023-01-10',
                'total'=>19.6
            ]
            ];
            Commande::insert($commande);

    }
}
