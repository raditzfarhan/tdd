<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        //
    }

    public function show(Book $book)
    {
        //
    }

    public function store()
    {
        $book = Book::create($this->validateRequest());

        return redirect('/books/' . $book->id);
    }

    public function update(Book $book)
    {
        $book->update($this->validateRequest());

        return redirect('/books/' . $book->id);
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect('/books');
    }

    protected function validateRequest()
    {
        return request()->validate([
            'title' => 'required',
            'author' => 'required',
        ]);
    }
}
