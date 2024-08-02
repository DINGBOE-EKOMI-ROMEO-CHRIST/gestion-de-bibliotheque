<!-- resources/views/authors/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="card-title text-center">Éditer un Auteur</h1>
            <form action="{{ route('authors.update', $author) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $author->name }}" required>
                </div>
                <div class="form-group">
                    <label for="biography">Biographie</label>
                    <textarea class="form-control" id="biography" name="biography">{{ $author->biography }}</textarea>
                </div>
                <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                </div>
            </form>
        </div>
    </div>
@endsection
