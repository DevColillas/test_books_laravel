<?php

namespace App\Http\Controllers;

use App\Http\Requests\books\StoreCreateRequest;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('id', 'asc')->paginate(10);;
        return view('pages.books.index', compact('books'));
    }

    public function create()
    {
        // return 'works';
        return view('pages.books.create');
    }

    public function store(StoreCreateRequest $request)
    {
        $book = new Book();

        $book->title = $request->title;
        $book->author = $request->author;

        $book->save();

        return redirect()->route('books.index');
    }

    public function edit(Book $book){
        $book = Book::find($book)->first();
        return view('pages.books.edit', compact('book'));
    }

    public function update(StoreCreateRequest $request, Book $book)
    {
        $book->title = $request->title;
        $book->author = $request->author;

        $book->save();

        return redirect()->route('books.index');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}
