<!-- resources/views/books/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 class="text-center">Ajouter un Livre</h1>
    <div class="card mt-4">
        <div class="card-body">
            <form action="{{ route('books.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="author_id">Auteur</label>
                    <select class="form-control" id="author_id" name="author_id" required>
                        @foreach($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="isbn">Numero du livre</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" required>
                </div>
                <div class="form-group">
                    <label for="published_year">Année de Publication</label>
                    <input type="number" class="form-control" id="published_year" name="published_year" required>
                </div>
                <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
@endsection
