<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $produit=[
            [
            'name'=>'Iphone',
            'quantite'=>100,
            'prix'=>120.3,
            'id_cat'=>1
            ],
            [
                'name'=>'huawei',
                'quantite'=>150,
                'prix'=>190.3,
                'id_cat'=>2
            ],
            [
                'name'=>'lg',
                'quantite'=>200,
                'prix'=>200.3,
                'id_cat'=>3
            ],
            [
                'name'=>'mac',
                'quantite'=>250,
                'prix'=>20.3,
                'id_cat'=>4
            ],
            [
                'name'=>'lenovo',
                'quantite'=>29,
                'prix'=>210.3,
                'id_cat'=>5
            ]

            ];
            Produit::insert($produit);
    }
}
