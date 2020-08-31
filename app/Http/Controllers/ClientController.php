<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Illuminate\Support\Facades\Redirect;

class ClientController extends Controller
{
    public function add()
    {
        return view('client.add');
    }
    public function getAll()
    
    {
        $liste_client = Client::paginate(2);//paginate c'est pour determiner le nombre de client a afficher
        //$liste_client = Client::all();
        return view('client.liste' ,['liste_client' => $liste_client]);
    }
    public function edit($id)
    {
        $client = Client::find($id);
        return view('client.edit',['client' => $client]);
    }
    public function update(Request $request)
    {
        $client =  Client::find($request->id);
        $client->nom = $request->nomclient;
        $client->prenom = $request->prenomclient;
        $client->adresse = $request->adresseclient;
        $client->telephone = $request->phoneclient;
        $client->datenaissance = $request->datenais;
        $client->numerotelephone = $request->phoneclient1;
        $client->salaire = $request->salaire;
        $leclient = $client->save();
        return Redirect('/client/getall');
    }
    public function delete($id)
    {
        $client = Client::find($id);//On demande au model Client de prendre les client avec les id  
        if($client != null) //s'il existe des clients on fait le delete.
        {
            $client->delete ();
        }

        return $this->getAll();
    }
    public function ajouter(Request $request)
    {
        // echo $request->nomclient;
        $client = new Client();
        $client->nom = $request->nomclient;
        $client->prenom = $request->prenomclient;
        $client->adresse = $request->adresseclient;
        $client->telephone = $request->phoneclient;
        $client->datenaissance = $request->datenais;
        $client->numerotelephone = $request->phoneclient1;
        $client->salaire = $request->salaire;

        $leclient = $client->save();
       
        return view('client.add',['confirmation'=>$leclient]);
    }
}

