<?php

namespace App\Models;
use App\Models\Categorie;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','quantite', 'prix','id_cat'
        ];
        //jointure table cateegorie avec table produit coté model
        public function categories()
        {
        return $this->belongsTo(Categorie::class,'id_cat');
        }
}
