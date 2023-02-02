<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_commande','id_client','etat'
        ];
        //jointure table cateegorie avec table produit coté model
        public function commandes()
        {
        return $this->belongsTo(Commande::class,'id_commande');
        }
        public function clients()
        {
        return $this->belongsTo(Client::class,'id_client');
        }
}
