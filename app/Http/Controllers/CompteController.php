<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compte;
use Illuminate\Support\Facades\Redirect;


class CompteController extends Controller
{
    public function add()
    {
        return view('compte.add');
    }
    public function getAll()
    {
        $liste_compte = Compte::paginate(2);//paginate c'est pour determiner le nombre de client a afficher
        //$liste_client = Client::all();
        return view('compte.liste' ,['liste_compte' => $liste_compte]);
    }
    public function edit($id)
    {
        $compte = Compte::find($id);
        return view('compte.edit',['compte' => $compte]);
    }
    public function aupdate(Request $request)
    {
        $compte =  Compte::find($request->id);
        $compte->NumeroCompte = $request->numcompte;
        $compte->NumeroAgence = $request->numagence;
        $compte->CleRib = $request->clerib;
        $compte->Ninea = $request->ninea;
        $compte->DateOuverture = $request->dateouv;
        $compte->FraisOuverture = $request->fraisouv;
        $compte->MontantInitial = $request->montantinitial;
        $compte->clients_id = $request->clientid;
        $leclient = $compte->save();
        return Redirect('/compte/getall');
    }
    public function delete($id)
    {
        return $this->getAll();
    }
    public function ajouter(Request $request)
    {
        $compte = new Compte();
        $compte->NumeroCompte = $request->numcompte;
        $compte->NumeroAgence = $request->numagence;
        $compte->CleRib = $request->clerib;
        $compte->Ninea = $request->ninea;
        $compte->DateOuverture = $request->dateouv;
        $compte->FraisOuverture = $request->fraisouv;
        $compte->MontantInitial = $request->montantinitial;
        $compte->clients_id = $request->clientid;
        $leclient = $compte->save();
        return view('compte.add',['confirmation'=>$leclient]);
    }
}
