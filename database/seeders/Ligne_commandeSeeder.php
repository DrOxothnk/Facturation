<?php

namespace Database\Seeders;

use App\Models\Ligne_commande;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ligne_commandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $ligne_commande=[
            [
            'id_commande'=>1,
            'id_produit'=>1,
            'quantite'=>10
            ],
            [
            'id_commande'=>2,
            'id_produit'=>2,
            'quantite'=>125
            ],
            [
                'id_commande'=>3,
                'id_produit'=>3,
                'quantite'=>200
            ]
            ];
            Ligne_commande::insert($ligne_commande);
    }
}
