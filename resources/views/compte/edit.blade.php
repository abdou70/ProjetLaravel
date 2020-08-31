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
                          <div class="alert alert-success">Compte ajouté</div>
                        @else
                           <div class="alert alert-danger">Compte non ajouter </div>
                        @endif

                    @endif
                    <form method="POST" action="{{ route('updatecompte') }}">
                        @csrf
                   <div class="form-group">
                    <label for="id" class="control-label"> Identifiant du  compte :</label>
                    <input type="text"  readonly="true" name="id" id="id" value="{{ $compte->id }}" class="form-control" />
                    </div>
                   
                    <div class="form-group">
                        <label for="numcompte" class="control-label"> Numero-Compte :</label>
                        <input type="text" name="numcompte" id="numcompte" 
                        value="{{ $compte->NumeroCompte }}"  class="form-control" />
                        </div>

                    <div class="form-group">
                    <label for="numagence" class="control-label"> Numero-Agence :</label>
                    <input type="text" name="numagence" id="numagence" value="{{  $compte->NumeroAgence }}" class="form-control" />
                    </div>
             
                    <div class="form-group">
                    <label for="clerib" class="control-label"> Cle-Rib :</label>
                    <input type="text" name="clerib" id="clerib" value="{{ $compte->CleRib }}" class="form-control" />
                    </div>
             
                    <div class="form-group">
                    <label for="ninea" class="control-label"> Ninea :</label>
                    <input type="tel" name="ninea" id="ninea" value="{{ $compte->Ninea }}" class="form-control" />
                    </div>
                    
                    <div class="form-group">
                    <label for="dateouv" class="control-label"> Date-Ouverture :</label>
                    <input type="date" name="dateouv" id="dateouv" value="{{ $compte->DateOuverture }}" class="form-control" />
                    </div>
 
                    <div class="form-group">
                    <label for="fraisouv" class="control-label"> Frais-Ouverture :</label>
                    <input type="tel" name="fraisouv" id="fraisouv" value="{{ $compte->FraisOuverture }}" class="form-control" />
                    </div>
              
                    <div class="form-group">
                    <label for="montantinitial" class="control-label"> Montant-Initial :</label>
                    <input type="tex" name="montantinitial" id="montantinitial"  value="{{ $compte->MontantInitial }}" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="client_id" class="control-label"> clients_id :</label>
                        <input type="tex" name="client_id" id="client_id"  value="{{ $compte->clients_id }}" class="form-control"/>
                        </div>

                    <div class="form-group">
                    <input type="submit" name="envoyer" id="envoyer" value="Enregistrer" class="btn btn-success"/>
                    <a class="btn btn-danger" href="{{ route('getallcompte') }}">Annuler</a>
                    </div>
                    </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
