@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulaire D'enregistrement de Client</div>

                <div class="card-body">
                    @if (isset($confirmation))

                        @if($confirmation ==1)
                          <div class="alert alert-success">Client ajouté</div>
                        @else
                           <div class="alert alert-danger">Client non ajouter </div>
                        @endif

                    @endif
                    <form method="POST" action="{{ route('updateclient') }}">
                        @csrf
                   <div class="form-group">
                    <label for="id" class="control-label"> Identifiant du  client :</label>
                    <input type="text"  readonly="true" name="id" id="id" value="{{ $client->id }}" class="form-control" />
                    </div>
                   
                    <div class="form-group">
                        <label for="nomclient" class="control-label"> Nom client :</label>
                        <input type="text" name="nomclient" id="nomclient" 
                        value="{{ $client->nom }}"  class="form-control" />
                        </div>

                    <div class="form-group">
                    <label for="prenomclient" class="control-label"> Prenom client :</label>
                    <input type="text" name="prenomclient" id="prenomclient" value="{{  $client->prenom }}" class="form-control" />
                    </div>
             
                    <div class="form-group">
                    <label for="adresseclient" class="control-label">adresse client :</label>
                    <input type="text" name="adresseclient" id="adresseclient" value="{{ $client->adresse }}" class="form-control" />
                    </div>
             
                    <div class="form-group">
                    <label for="phoneclient" class="control-label"> telephone :</label>
                    <input type="tel" name="phoneclient" id="phoneclient" value="{{ $client->telephone }}" class="form-control" />
                    </div>
                    
                    <div class="form-group">
                    <label for="datenais" class="control-label"> Date de naissance :</label>
                    <input type="date" name="datenais" id="datenais" value="{{ $client->datenaissance }}" class="form-control" />
                    </div>
 
                    <div class="form-group">
                    <label for="phoneclient1" class="control-label"> Numero telephone :</label>
                    <input type="tel" name="phoneclient1" id="phoneclient1" value="{{ $client->numerotelephone }}" class="form-control" />
                    </div>
              
                    <div class="form-group">
                    <label for="salaire" class="control-label"> salaire :</label>
                    <input type="tex" name="salaire" id="salaire"  value="{{ $client->salaire }}" class="form-control"/>
                    </div>

                    <div class="form-group">
                    <input type="submit" name="envoyer" id="envoyer" value="Enregistrer" class="btn btn-success"/>
                    <a class="btn btn-danger" href={{ route('getallclient') }}>Annuler</a>
                    </div>
                    </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
