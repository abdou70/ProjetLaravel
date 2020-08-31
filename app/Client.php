<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = array ('nom','prenom','adresse','telephone','datenaissance','numerotelephone','salaire');
    public static $rules = array ('nom'=>'required|min:2',
                                  'prenom'=>'required|min:2',
                                  'adresse'=>'required|min:4',
                                  'telephone'=>'required|min:9',
                                  'datenaissance'=>'required|min:7',
                                  'salaire'=>'required|min:7');

    public function Compte(){

        return $this->hasMany('App\Compte');
    }
}
