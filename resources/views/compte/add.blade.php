@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulaire D'enregistrement d'un Compte</div>

                <div class="card-body">
                    @if (isset($confirmation))

                        @if($confirmation ==1)
                          <div class="alert alert-success">Compte ajouté</div>
                        @else
                           <div class="alert alert-danger">Compte non ajouter </div>
                        @endif

                    @endif
                    <form method="POST" action="{{ route('ajoutercompte') }}">
                        @csrf
                   <div class="form-group">
                    <label for="numcompte" class="control-label"> Numero-Compte :</label>
                    <input type="text" name="numcompte" id="numcompte" class="form-control" />
                    </div>
                   
                    <div class="form-group">
                    <label for="numagence" class="control-label"> Numero-Agence :</label>
                    <input type="text" name="numagence" id="numagence" class="form-control" />
                    </div>
             
                    <div class="form-group">
                    <label for="clerib" class="control-label">Cle-Rib :</label>
                    <input type="text" name="clerib" id="clerib" class="form-control" />
                    </div>
             
                    <div class="form-group">
                    <label for="ninea" class="control-label"> Ninea :</label>
                    <input type="tel" name="ninea" id="ninea" class="form-control" />
                    </div>
                    
                    <div class="form-group">
                    <label for="dateouv" class="control-label"> Date-Ouverture :</label>
                    <input type="date" name="dateouv" id="dateouv" class="form-control" />
                    </div>
 
                    <div class="form-group">
                    <label for="fraisouv" class="control-label"> Frais-Ouverture :</label>
                    <input type="tel" name="fraisouv" id="fraisouv" class="form-control" />
                    </div>
              
                    <div class="form-group">
                    <label for="montantinitial" class="control-label"> Montant-Initial :</label>
                    <input type="tex" name="montantinitial" id="montantinitial"  class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="clientid" class="control-label"> clients_id :</label>
                        <input type="tex" name="clientid" id="clientid"  class="form-control"/>
                        </div>

                    <div class="form-group">
                    <input type="submit" name="envoyer" id="envoyer" value="Enregistrer" class="btn btn-success"/>
                    <input type="reset" name="annuler" id="annuler" value="annuler" class="btn btn-danger" />
                    </div>
                    </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
