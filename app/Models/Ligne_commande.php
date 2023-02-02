<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ligne_commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_commande','id_produit','quantite'
        ];
        //jointure table cateegorie avec table produit coté model
        public function commandes()
        {
        return $this->belongsTo(Commande::class,'id_commande');
        }
        public function produits()
        {
        return $this->belongsTo(Produit::class,'id_produit');
        }
}
