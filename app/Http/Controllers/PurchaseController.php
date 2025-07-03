<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    public function buy($bookId)
    {
        $user = Auth::user();
        $book = Book::findOrFail($bookId);

        if (!$user->purchases->contains($book)) {
            $user->purchases()->attach($book);
        }

        return redirect()->route('profile')->with('success', 'Книга добавлена в покупки');
    }
}
