<!-- resources/views/authors/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="card-title text-center">Liste des Auteurs</h1>
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Nom</th>
                        <th>Biographie</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($authors as $author)
                        <tr>
                            <td>{{ $author->name }}</td>
                            <td>{{ $author->biography }}</td>
                            <td>
                                <a href="{{ route('authors.edit', $author) }}" class="btn btn-warning">Éditer</a>
                                <form action="{{ route('authors.destroy', $author) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                   
                                    <button type="submit" class="btn btn-danger ">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $authors->links() }}
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
                <a href="{{ route('authors.create') }}" class="btn btn-primary mb-3">Ajouter un Auteur</a>
            </div>
@endsection
