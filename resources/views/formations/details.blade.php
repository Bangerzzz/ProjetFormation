@extends('layout')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <form method="post" action="{{route('formaUpdate',$formation->id)}}">
                    @csrf
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" name="nom" required value="{{$formation->nom}}">
                    </div>
            
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control"  rows="5" required value="{{$formation->description}}"></textarea>
                    </div>
            
                    <div class="form-group">
                        <label>Categorie</label>
                        <textarea rows="5" class="form-control" name="categorie" required value="{{$formation->categorie}}"></textarea>
                    </div>
            
                    <div class="form-group">
                        <label>Chapitres</label>
                        <textarea rows="5" class="form-control" name="chapitres" required value="{{$formation->chapitres}}"></textarea>
                    </div>
            
                    <div class="form-group">
                        <label>Prix</label>
                        <input type="number" class="form-control" name="price" required value="{{$formation->prix}}">
                    </div>
            
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
        
        
        
                <p>Ecrit le {{$formation->created_at->format('d/m/Y')}}</p>
            </div>
            <div class="col-md-6">
                <form method="post" action="{{route('formaUpdatePicture',$formation->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Modifier l'image de la formation</label>
                        <input type="file" name="picture" required class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
            </div>
        </div>

        <a href="{{route('formaList')}}" class= "btn btn-primary">Retourner à la liste des formations</a>
        <form method="post" action="{{route('formaDelete', $formation->id)}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Supprimer la formation</button>
        </form>
    </div>
@endsection