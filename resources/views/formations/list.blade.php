@extends('layout')

@section('content')
    <h1>Liste des formations</h1>
    <ul>
        @if(sizeof($formations)>0)
            <div class="row">
                @foreach ($formations as $formation)
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="{{asset("storage/$formation->picture")}}" style="object-fit: cover" height="200">
                            <div class="card-body">
                                <h5 class="card-title">{{$formation->nom}}</h5>
                                <p>{{$formation->description}}</p>
                                <p>{{$formation->prix}}€</p>

                                <div class="d-flex">
                                    <a href="{{route('formaDetails', $formation->id)}}" class="btn btn-primary">Détails</a>
                                    <form method="post" action="{{route('formaDelete', $formation->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Supprimer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    
            </div>
        @else
            <p>Il n y a aucun article</p>
        @endif
    </ul>
@endsection