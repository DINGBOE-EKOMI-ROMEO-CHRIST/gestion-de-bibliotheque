<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    
    public function index()
    {
        $books = Book::with('author')->paginate(10);
        return view('books.index', compact('books'));
    }
    
    public function create()
    {
        $authors = Author::all();
        return view('books.create', compact('authors'));
    }


    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'isbn' => 'required|string|max:13|unique:books',
            'published_year' => 'required|integer',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Livre ajouté avec succès.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $authors = Author::all();
        return view('books.edit', compact('book', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     */
  
     public function update(Request $request, Book $book)
     {
         $request->validate([
             'title' => 'required|string|max:255',
             'author_id' => 'required|exists:authors,id',
             'isbn' => 'required|string|max:13|unique:books,isbn,' . $book->id,
             'published_year' => 'required|integer',
         ]);
 
         $book->update($request->all());
 
         return redirect()->route('books.index')->with('success', 'Livre mis à jour avec succès.');
     }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Livre supprimé avec succès.');
    }
}
