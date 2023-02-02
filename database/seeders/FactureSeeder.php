<?php

namespace Database\Seeders;
use App\Models\Facture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facture=[
            [
            'id_commande'=> 1,
            'id_client'=>1,
            'etat'=>1

            ],
            [
                'id_commande'=> 2,
                'id_client'=>2,
                'etat'=>0
            ],
            [
                'id_commande'=>3,
                'id_client'=>3,
                'etat'=>1,
            ]
            ];
            Facture::insert($facture);
    }

}
