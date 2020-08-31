@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des Clients</div>

                <div class="card-body">
                    <table class="table">
                       <tr>
                           <th>Identifiant</th>
                           <th>Nom du client</th>
                           <th>Prenom du client</th>
                           <th>Telephone du client</th>
                           <th>Action</th>
                           <th>Action</th>
                       </tr>
                       @foreach($liste_client as $client)
                       <tr>
                           <td>{{ $client->id }}</td>
                           <td>{{ $client->nom }}</td>
                           <td>{{ $client->prenom }}</td>
                           <td>{{ $client->telephone }}</td>
                           <td><a href={{ route('editclient' , ['id' => $client->id]) }}>Editer</a></td>
                           <td><a href={{ route('deleteclient' , ['id' => $client->id]) }} onclick="return confirm(Voulez-vous supprimer le client?)";>Supprimer</a></td>
                       </tr>
                       @endforeach
                    </table>
                    {{ $liste_client->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
