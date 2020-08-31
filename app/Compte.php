<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    
    protected $fillable = array ('NumeroCompte','NumeroAgence','CleRib','Ninea','DateOuverture','FraisOuverture','MontantInitial','clients_id');
    public static $rules = array ('NumeroCompte'=>'required|min:2',
                                  'NumeroAgence'=>'required|min:2',
                                  'CleRib'=>'required|min:2',
                                  'Ninea'=>'required|min:3',
                                  'DateOuverture'=>'required|min:6',
                                  'FraisOuverture'=>'required|min:4',
                                  'MontantInitial'=>'required|min:4',
                                  'clients_id'=>'required');

    public function Compte(){

        return $this->belongsTo('App\Client');
    }
}
