<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(5);
        return view('books.index', compact('books'));
    }

    public function catalog()
    {
        $books = Book::all();
        return view('books.catalog', compact('books'));
    }

    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect()->route('books.index');
    }
    
    public function show($id)
    {
        $book = Book::findOrFail($id); // Получаем книгу по id
        return view('book', compact('book')); // Передаем в шаблон
    }
}
