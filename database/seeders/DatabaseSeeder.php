<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categorie;
use App\Models\Client;
use App\Models\Commande;
use App\Models\Facture;
use App\Models\Ligne_commande;
use Database\Seeders\Ligne_commandeSeeder;
use Database\Seeders\FactureSeeder;
use Database\Seeders\CommandeSeeder;
use Database\Seeders\ClientSeeder;
use Database\Seeders\CategorieSeeder;
use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\UserSeeder;
use App\Models\Produit;
use Database\Seeders\ProduitSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            //seedres for users

       /* $this->call([
            UserSeeder::class,
            ]); */
            //seedres for produit

            $this->call([
                ProduitSeeder::class,
                ]);

                 //seedres for categorie


                $this->call([
                    CategorieSeeder::class,
                    ]);

                //seedres for client

                $this->call([
                    ClientSeeder::class,
                    ]);
               //seedres for commande
               $this->call([
                CommandeSeeder::class,
                ]);
               //seedres for facture
               $this->call([
                FactureSeeder::class,
                ]);

                 //seedres for ligne_commande
                 $this->call([
                  Ligne_commandeSeeder::class,
               ]);



    }
}
