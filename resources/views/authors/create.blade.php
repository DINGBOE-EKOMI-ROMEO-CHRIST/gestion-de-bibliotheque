

@extends('layouts.app')
@section('content')
    <h1 class="text-center">Ajouter un Auteur</h1>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="biography">Biographie</label>
            <textarea class="form-control" id="biography" name="biography"></textarea>
        </div>
        <div class="d-flex justify-content-center mt-5">
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>
    </form>
@endsection
