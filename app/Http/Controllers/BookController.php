<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function home(){
        return view('landingpage', [
            'categories' => Category::all(),
            'activeNav' => 'home',
            'books' => Book::paginate(5)
        ]);
    }
}
