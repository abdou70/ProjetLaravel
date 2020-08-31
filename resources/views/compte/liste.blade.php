@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des Comptes</div>

                <div class="card-body">
                    <table class="table">
                       <tr>
                           <th>Identifiant</th>
                           <th>Numero du compte</th>
                           <th>Numero de l'agence</th>
                           <th>Cle-Rib du compte</th>
                           <th>Action</th>
                           <th>Action</th>
                       </tr>
                       @foreach($liste_compte as $compte)
                       <tr>
                           <td>{{ $compte->id }}</td>
                           <td>{{ $compte->NumeroCompte }}</td>
                           <td>{{ $compte->NumeroAgence }}</td>
                           <td>{{ $compte->CleRib }}</td>
                           <td><a href={{ route('editcompte' , ['id' => $compte->id]) }}>Editer</a></td>
                           <td><a href={{ route('deletecompte' , ['id' => $compte->id]) }} onclick="return confirm(Voulez-vous supprimer le client?)";>Supprimer</a></td>
                       </tr>
                       @endforeach
                    </table>
                    {{ $liste_compte->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
