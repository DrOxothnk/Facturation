<?php

namespace Database\Seeders;
use App\Models\Categorie;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorie=[
            [
            'nom'=>'Telephone protable'

            ],
            [
                'nom'=>'oradinateur'
            ],
            [
                'nom'=>'Ipad'

            ],
            [
                'nom'=>'mac'

            ],
            [
                'nom'=>'smartphone'

            ]
            ];
            Categorie::insert($categorie);
    }
}
