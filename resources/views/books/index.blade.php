<!-- resources/views/books/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 class="text-center">Liste des Livres</h1>
    
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Auteur</th>
                        <th>Numero du livre</th>
                        <th>Année de Publication</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author->name }}</td>
                            <td>{{ $book->isbn }}</td>
                            <td>{{ $book->published_year }}</td>
                            <td>
                                <a href="{{ route('books.edit', $book) }}" class="btn btn-warning btn-sm">Éditer</a>
                                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
            
            {{ $books->links() }}
        </div>
    </div>
    <div class="d-flex justify-content-center">
            <a href="{{ route('books.create') }}" class="btn btn-primary mb-3 mt-5">Ajouter un Livre</a>
            </div>
@endsection
