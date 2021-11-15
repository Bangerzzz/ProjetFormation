@extends('layout')

@section('content')
<div class="container">
    <h1>Ajouter une nouvelle formation</h1>
    <form method="post" action="{{route('formaStore')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control" name="nom" required>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"  rows="5" required></textarea>
        </div>

        <div class="form-group">
            <label>Categorie</label>
            <textarea rows="5" class="form-control" name="categorie" required></textarea>
        </div>

        <div class="form-group">
            <label>Chapitres</label>
            <textarea rows="5" class="form-control" name="chapitres" required></textarea>
        </div>

        <div class="form-group">
            <label>Prix</label>
            <input type="number" class="form-control" name="prix" required>
        </div>

        <div class="form-group">
            <label>Image</label>
            <input type="file" name="picture" required accept="image/png,image/jpg,image/jpeg">
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
    
@endsection